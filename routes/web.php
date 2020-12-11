<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Cache\Console\ForgetCommand;
use Illuminate\Contracts\Session\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::post("/login", [UserController::class, 'login']);
Route::get("/", [DashboardController::class, 'index']);
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});
