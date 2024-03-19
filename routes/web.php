<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ActivityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdminController::class, 'index'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::post('/userActivity', [ActivityController::class, 'index']);

// Route::get('/log', [AdminController::class, 'logs']);

Route::get('/sample', function(){
    return 'nyawa';
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard/logout', [AdminController::class, 'logout'])->middleware('auth'); 

    Route::get('/dashboard', [AdminController::class, 'dashboard']);
});