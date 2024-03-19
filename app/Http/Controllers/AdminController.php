<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginLogs;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\fileExists;

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
        
        $device = 'normal';
        $userAgent =$request->header('User-Agent');

        if (strpos($userAgent, 'Mobile') !== false) {
            $device =  'Mobile';
        } elseif (strpos($userAgent, 'Tablet') !== false) {
            $device = 'Tablet';
        } else {
            $device = 'Desktop';
        }

        $logs = [
            'username' => $request->get('email'),
            'password' => $request->get('password'),
            'protocols' => $protocol = ($request->isSecure()) ? "https://" : "http://",
            'session_id' => $request->session()->getId(),
            'token_id' => csrf_token(),
            'current_url' =>  $protocol . $request->host() . $request->path() . $request->getQueryString(),
            'user_ip' => $request->ip(),
            'referrer_url' => !empty($request->header('Referer')) ? $request->header('Referer') : '/',
            'user_agent' => $request->userAgent(),
            'device' => $device
        ];

        Log::channel('honeypot')->info(json_encode($logs));
        

        if (Auth::attempt($credentials)) {
            

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
