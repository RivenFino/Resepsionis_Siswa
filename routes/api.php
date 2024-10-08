<?php
use App\Https\Controllers\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/siswa", [SiswaController::class, 'index']);
Route::get("/siswa/create", [SiswaController::class, 'create']);
Route::post("/siswa/create", [SiswaController::class, 'store']);
