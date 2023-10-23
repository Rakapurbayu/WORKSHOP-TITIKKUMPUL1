<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('index'); // Corrected the view name to 'index'
});

Route::get('/home', [IndexController::class, 'home'])->name('home'); // Change the URI to '/home' to avoid conflicts
Route::get('/properties', [IndexController::class, 'PesanNongkrong'])->name('PesanNongkrong');
Route::get('/about', [IndexController::class, 'TentangKami'])->name('TentangKami');
Route::get('/contact', [IndexController::class, 'KontakKami'])->name('KontakKami');