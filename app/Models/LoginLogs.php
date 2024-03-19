<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginLogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_url',
        'user_ip_address',
        'referrer_url',
        'user_agent'
    ];	
}
