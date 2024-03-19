<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use App\Models\LoginLogs;

class AdminController extends Controller
{
    //
    public function index(){
        if(Auth::check()){
            return redirect('dashboard');
        }

        return view('index');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $logs = [
                'protocols' => $protocol = ($request->isSecure()) ? "https://" : "http://",
                'current_url' =>  $protocol . $request->host() . $request->path() . $request->getQueryString(),
                'user_ip' => $request->ip(),
                'referrer_url' => !empty($request->header('Referer')) ? $request->header('Referer') : '/',
                'user_agent' => $request->userAgent()
            ];

            LoginLogs::create([
                'page_url' => $logs['current_url'],
                'user_ip_address' => $logs['user_ip'],
                'referrer_url' => $logs['referrer_url'],
                'user_agent' => $logs['user_agent']
            ]);

            $request->session()->regenerate();
 
            return redirect('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
