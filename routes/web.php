<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PesanNongkrongController;
use App\Http\Controllers\PesanMakanController;
use App\Http\Controllers\JokopiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/login', [LoginController::class, 'login'])->name('Login');
Route::get('/regis', [RegisterController::class, 'register'])->name('Register');
Route::get('/home', [IndexController::class, 'home'])->name('home');
Route::get('/pesan', [PesanNongkrongController::class, 'PesanNongkrong'])->name('PesanNongkrong');
Route::get('/about', [AboutController::class, 'TentangKami'])->name('TentangKami');
Route::get('/contact', [ContactController::class, 'KontakKami'])->name('KontakKami');
Route::get('/makan', [PesanMakanController::class, 'PesanMakan'])->name('PesanMakan');
Route::get('/vendor', [PesanMakanController::class, 'Vendor'])->name('DetailsVendor');
Route::get('/jokopi', [JokopiController::class, 'JokopiVendor'])->name('JokopiVendor');

