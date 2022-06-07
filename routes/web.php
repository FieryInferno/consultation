<?php

use Illuminate\Support\Facades\Route;

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
  return view('welcome', [
    'active'  => 'home',
    'title'   => 'Home',
  ]);
});
Route::get('/about', function () {
  return view('about', [
    'active'  => 'about',
    'title'   => 'About',
  ]);
});
Route::get('/berita', function () {
  return view('berita', [
    'active'  => 'berita',
    'title'   => 'Berita',
  ]);
});
Route::get('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'create']);
Route::post('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'store']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'auth']);

Route::middleware('auth')->group(function () {
  Route::prefix('admin')->group(function () {
    Route::get('/', function () {
      return view('admin/dashboard', [
        'active'  => 'dashboard',
        'title'   => 'Dashboard',
      ]);
    });
    
    Route::resource('pengacara', App\Http\Controllers\PengacaraController::class);
    Route::resource('jadwal', App\Http\Controllers\JadwalController::class);
  });
});