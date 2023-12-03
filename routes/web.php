<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PesanNongkrongController;
use App\Http\Controllers\PesanMakanController;
use App\Http\Controllers\JokopiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListPemesananController;
use App\Http\Controllers\ReservationController;

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
    return view('pages.index');
});

// Definisi route untuk auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk halaman-halaman tertentu
Route::get('/home', [IndexController::class, 'home'])->name('home');
Route::get('/pesanansaya', [ListPemesananController::class, 'ListPemesanan'])->name('ListPemesanan');
Route::get('/pesan', [PesanNongkrongController::class, 'PesanNongkrong'])->name('PesanNongkrong');
Route::get('/about', [AboutController::class, 'TentangKami'])->name('TentangKami');
Route::get('/contact', [ContactController::class, 'KontakKami'])->name('KontakKami');
Route::get('/makan', [PesanMakanController::class, 'PesanMakan'])->name('PesanMakan');
Route::get('/vendor', [PesanMakanController::class, 'Vendor'])->name('DetailsVendor');

// Hanya menggunakan Route::resource untuk JokopiController

Route::resource('/jokopi', JokopiController::class)->middleware('auth');
