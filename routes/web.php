<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SessionController;
use App\http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;

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
    Route::get('/loginSiswa', [SessionController::class, 'siswa'])->middleware('logout');
    Route::post('/login/proses', [SessionController::class, 'login']);
    Route::post('/loginSiswa/proses', [SessionController::class, 'loginSiswa']);
    Route::get('/login/logout', [SessionController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('login');
});
// Route::controller(OrderController::class)->group(function (){
//     Route::get('/siswa', [SiswaController::class, 'index']);
//     Route::get('/siswa/create', [SiswaController::class, 'create']);
//     Route::post('/siswa/create', [SiswaController::class, 'store']);
//     Route::get('/siswa/edit', [SiswaController::class, 'edit']);  
//     Route::post('/siswa/edit', [SiswaController::class, 'update']);  
// });

Route::resource('siswa', SiswaController::class);
