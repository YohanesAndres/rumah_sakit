<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PengobatanController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pasiens', PasienController::class);
Route::resource('pengobatans', PengobatanController::class);
Route::resource('obats', ObatController::class);
Route::resource('reseps', ResepController::class);
Route::resource('dokters', DokterController::class);
Route::resource('kategoris', KategoriController::class);