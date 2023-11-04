<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\City\GillanController;
use \App\Http\Controllers\Admin\City\IsfahanController;
use App\Http\Controllers\Admin\City\KishController;
use App\Http\Controllers\Admin\City\MashhadController;
use App\Http\Controllers\Admin\City\ShirazController;
use App\Http\Controllers\Admin\City\TehranController;

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

Route::resource('profile', \App\Http\Controllers\Admin\AdminProfile::class);
Route::get('management', [\App\Http\Controllers\Admin\Management\IndexController::class, 'index'])->name('management');
Route::prefix('management')->group(function () {
    Route::resource('attribute', \App\Http\Controllers\Admin\Management\AttributeController::class);
    Route::resource('cash', \App\Http\Controllers\Admin\Management\CashController::class);
   Route::resource('city', \App\Http\Controllers\Admin\Management\CityController::class);
    Route::resource('host', \App\Http\Controllers\Admin\Management\HostController::class);
    Route::resource('hotel', \App\Http\Controllers\Admin\Management\HotelController::class);
   Route::resource('image', \App\Http\Controllers\Admin\Management\ImageController::class);
});



//City
Route::prefix('city')->group(function () {
    Route::get('gillan', [GillanController::class, 'index'])->name('city.gillan');
    Route::get('isfahan', [IsfahanController::class, 'index'])->name('city.isfahan');
    Route::get('kish', [KishController::class, 'index'])->name('city.kish');
    Route::get('mashhad', [MashhadController::class, 'index'])->name('city.mashhad');
    Route::get('shiraz', [ShirazController::class, 'index'])->name('city.shiraz');
    Route::get('tehran', [TehranController::class, 'index'])->name('city.tehran');
});




//Kish
Route::prefix('city/kish')->group(function () {
    Route::get('panorama', [KishController::class, 'panorama'])->name('city.kish.panorama');
    Route::get('shayegan', [KishController::class, 'shayegan'])->name('city.kish.shayegan');
    Route::get('shayanh', [KishController::class, 'shayan'])->name('city.kish.shayan');
});

//Esfahan
Route::prefix('city/isfahan')->group(function () {
    Route::get('kosar', [IsfahanController::class, 'kosar'])->name('city.isfahan.kosar');
    Route::get('toloe', [IsfahanController::class, 'toloe'])->name('city.isfahan.toloe');
    Route::get('pirozi', [IsfahanController::class, 'pirozi'])->name('city.isfahan.pirozi');
});

//Mashhad
Route::prefix('city/mashhad')->group(function () {
    Route::get('darvishi', [MashhadController::class, 'darvishi'])->name('city.mashhad.darvishi');
    Route::get('almas', [MashhadController::class, 'almas'])->name('city.mashhad.almas');
    Route::get('boshra', [MashhadController::class, 'boshra'])->name('city.mashhad.boshra');
});

//Gillan
Route::prefix('city/gillan')->group(function () {
    Route::get('jahan', [GillanController::class, 'jahan'])->name('city.gillan.jahan');
    Route::get('pamchal', [GillanController::class, 'pamchal'])->name('city.gillan.pamchal');
    Route::get('arka', [GillanController::class, 'arka'])->name('city.gillan.arka');
});

//Tehran
Route::prefix('city/tehran')->group(function () {
    Route::get('espinas', [TehranController::class, 'espinas'])->name('city.tehran.espinas');
    Route::get('parsyan', [TehranController::class, 'parsyan'])->name('city.tehran.parsyan');
    Route::get('palas', [TehranController::class, 'palas'])->name('city.tehran.palas');
});

//Shiraz
Route::prefix('city/shiraz')->group(function () {
    Route::get('zandye', [ShirazController::class, 'zandye'])->name('city.shiraz.zandye');
    Route::get('bh', [ShirazController::class, 'bh'])->name('city.shiraz.bh');
    Route::get('chamran', [ShirazController::class, 'chamran'])->name('city.shiraz.chamran');
});

