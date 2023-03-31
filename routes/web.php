<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\TourController;

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

Route::get('/calendar/{tourId}', function () {
    return view('welcome');
});

Route::get('/beer-tours', function () {
    return view('welcome');
});

Route::get('/tour', [TourController::class, 'tours'])->name('tours');

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('/events', [EventController::class, 'allEvents'])->name('allEvents');

Route::get('/events/{tourId}/{formatedDate}', [EventController::class, 'events'])->name('events');

Route::post('/events/action', [EventController::class, 'action'])->name('action');

Route::post('/booking/CustomerCreate', [BookingController::class, 'CustomerCreate'])->name('CustomerCreate');

Route::post('/customer/action', [CustomerController::class, 'action'])->name('customer-action');

Route::resource('bookings', BookingController::class)->middleware('auth');
Route::resource('guides', GuideController::class)->middleware('auth');
Route::resource('merchandises', MerchandiseController::class)->middleware('auth');
Route::resource('tours', TourController::class)->middleware('auth');
Route::resource('admins', AdminController::class)->middleware('auth');
