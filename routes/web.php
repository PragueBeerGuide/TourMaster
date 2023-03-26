<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\index;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('/show-admin/{id}', [AdminController::class, 'show'])->name('show-admin');

Route::post('/store-admin/edit/{id}', [AdminController::class, 'store'])->name('store-admin');
