<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SessionController;
use App\http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('sesi/index');
});

Route::controller(OrderController::class)->group(function (){
    Route::get('/login', [SessionController::class, 'index'])->middleware('logout');
    Route::post('/login/proses', [SessionController::class, 'login']);
    Route::get('/login/logout', [SessionController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('login');
});