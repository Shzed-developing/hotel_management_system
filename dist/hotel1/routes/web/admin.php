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
    return view('admin.index');
});

Route::get('/management', function () {
    return view('admin.management.management');
})->name('management');

Route::resource('cities', \App\Http\Controllers\Admin\CityController::class);
Route::resource('images', \App\Http\Controllers\Admin\ImageController::class);
Route::resource('hosts', \App\Http\Controllers\Admin\HostController::class);
Route::resource('hotels', \App\Http\Controllers\Admin\HotelController::class);
Route::resource('attributes', \App\Http\Controllers\Admin\AttributeController::class);
Route::resource('cashs', \App\Http\Controllers\Admin\CashController::class);
Route::resource('profile', \App\Http\Controllers\Admin\AdminProfile::class);
