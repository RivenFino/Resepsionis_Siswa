<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SessionController;
use App\http\Controllers\DashboardController;
use App\Http\Controllers\KeperluanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StafController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});

Route::controller(OrderController::class)->group(function (){
    Route::get('/login', [SessionController::class, 'index'])->middleware('logout');
    Route::get('/loginSiswa', [SessionController::class, 'siswa'])->middleware('logout');
    Route::post('/login/proses', [SessionController::class, 'login']);
    Route::post('/loginSiswa/proses', [SessionController::class, 'loginSiswa']);
    Route::get('/login/logout', [SessionController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('login');
});

Route::resource('siswa', SiswaController::class)->middleware('login');
Route::resource('staf', StafController::class)->middleware('login');
Route::resource('keperluan', KeperluanController::class)->middleware('login');

Route::get('/process-form', [KeperluanController::class, 'processForm'])->middleware('login');
Route::post('/process-form', [KeperluanController::class, 'store'])->middleware('login');

Route::get('/form', [UserController::class, 'create']);
Route::get('/history', [UserController::class, 'index']);
Route::post('/Data', [UserController::class, 'index']);
Route::post('/process', [UserController::class, 'processForm']);
Route::post('/process-form', [UserController::class, 'store']);