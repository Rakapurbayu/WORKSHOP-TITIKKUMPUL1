<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PesanNongkrongController;
use App\Http\Controllers\PesanMakanController;

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
    return view('pages.index'); // Corrected the view name to 'index'
});


Route::get('/home', [IndexController::class, 'home'])->name('home'); // Change the URI to '/home' to avoid conflicts
Route::get('/pesan', [PesanNongkrongController::class, 'PesanNongkrong'])->name('PesanNongkrong');
Route::get('/about', [AboutController::class, 'TentangKami'])->name('TentangKami');
Route::get('/contact', [ContactController::class, 'KontakKami'])->name('KontakKami');
Route::get('/makan', [PesanMakanController::class, 'PesanMakan'])->name('PesanMakan');
