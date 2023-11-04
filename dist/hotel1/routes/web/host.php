<?php

use Illuminate\Support\Facades\Route;

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
    return view('host.index');
});

Route::resource('profile', \App\Http\Controllers\Host\ProfileController::class);
Route::resource('hotels', \App\Http\Controllers\Host\HotelController::class);
Route::get('list-order', [\App\Http\Controllers\Host\OrderController::class, 'index'])->name('order');
Route::get('list-cashhost', [\App\Http\Controllers\Host\OrderController::class, 'cashhostindex'])->name('orderlist');
