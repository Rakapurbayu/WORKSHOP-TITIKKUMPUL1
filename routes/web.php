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
    return view('Index');
});

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/properties', [IndexController::class, 'properties'])->name('properties');
Route::get('/about', [IndexController::class, 'TentangKami'])->name('TentangKami');
Route::get('/contact', [IndexController::class, 'KontakKami'])->name('KontakKami');
