<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ActivityController extends Controller
{
    //
    public function index(Request $request){
        $data = [
            'btn_name' => $request->get('btnName'),
            'btn_tag' => $request->get('btnTag'),
        ];
        Log::channel('honeypot')->alert(json_encode($data));
    }
}
