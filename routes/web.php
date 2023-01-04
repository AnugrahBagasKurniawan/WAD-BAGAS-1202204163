<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\tambahmobil;

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
    return view('Home-Bagas');
});

Route::get('/loginpage',[LoginController::class, 'halamanlogin'])->name('loginpage');
Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');

Route::group(['middleware'=> ['auth']], function() {
    Route::get('/Home2-Bagas',[HomeController::class, 'index'])->name('Home2-Bagas');
});

Route::get('/registrasi',[LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi',[LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

Route::get('/ListCar-Bagas',[tambahmobil::class, 'index'])->name('ListCar-Bagas');
Route::get('/Add-Bagas',[tambahmobil::class, 'create'])->name('Add-Bagas');

Route::post('/simpanmobil',[tambahmobil::class, 'store'])->name('simpanmobil');


Route::get('/ListCar-Bagas',[tambahmobil::class, 'tampil'])->name('ListCar-Bagas');
Route::get('/hapus',[tambahmobil::class, 'destroy'])->name('hapus')->middleware('auth');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');