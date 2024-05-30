<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::post('mahasiswa', [MahasiswaController::class, 'store']);
Route::get('mahasiswa/{item}', [MahasiswaController::class, 'show']);
Route::put('mahasiswa/{item}', [MahasiswaController::class, 'update']);
Route::delete('mahasiswa/{item}', [MahasiswaController::class, 'destroy']);
