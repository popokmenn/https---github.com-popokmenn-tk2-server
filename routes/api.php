<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\PembeliController;
use App\Http\Controllers\Api\StaffController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('mahasiswa', MahasiswaController::class);
Route::apiResource('barang', BarangController::class);
Route::apiResource('pembeli', PembeliController::class);
Route::apiResource('staff', StaffController::class);