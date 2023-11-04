<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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
    return view('home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('profile', \App\Http\Controllers\Home\UserProfile::class);

Route::prefix('profilee')->group(function () {
   Route::resource('orders', \App\Http\Controllers\Home\Profile\OrderController::class);
   Route::resource('payments', \App\Http\Controllers\Home\Profile\PaymentController::class);
});






//City
Route::prefix('city')->group(function () {
    Route::get('kish', [\App\Http\Controllers\Home\City\KishController::class, 'index'])->name('city.kish');
    Route::get('isfahan', [\App\Http\Controllers\Home\City\IsfahanController::class, 'index'])->name('city.isfahan');
    Route::get('mashhad', [\App\Http\Controllers\Home\City\MashhadController::class, 'index'])->name('city.mashhad');
    Route::get('gillan', [\App\Http\Controllers\Home\City\GillanController::class, 'index'])->name('city.gillan');
    Route::get('tehran', [\App\Http\Controllers\Home\City\TehranController::class, 'index'])->name('city.tehran');
    Route::get('shiraz', [\App\Http\Controllers\Home\City\ShirazController::class, 'index'])->name('city.shiraz');
});



//Kish
Route::prefix('city/kish')->group(function () {
    Route::get('panorama', [\App\Http\Controllers\Home\City\KishController::class, 'panorama'])->name('city.kish.panorama');
    Route::get('shayegan', [\App\Http\Controllers\Home\City\KishController::class, 'shayegan'])->name('city.kish.shayegan');
    Route::get('shayanh', [\App\Http\Controllers\Home\City\KishController::class, 'shayan'])->name('city.kish.shayan');
});

//Esfahan
Route::prefix('city/isfahan')->group(function () {
    Route::get('kosar', [\App\Http\Controllers\Home\City\IsfahanController::class, 'kosar'])->name('city.isfahan.kosar');
    Route::get('toloe', [\App\Http\Controllers\Home\City\IsfahanController::class, 'toloe'])->name('city.isfahan.toloe');
    Route::get('pirozi', [\App\Http\Controllers\Home\City\IsfahanController::class, 'pirozi'])->name('city.isfahan.pirozi');
});

//Mashhad
Route::prefix('city/mashhad')->group(function () {
    Route::get('darvishi', [\App\Http\Controllers\Home\City\MashhadController::class, 'darvishi'])->name('city.mashhad.darvishi');
    Route::get('almas', [\App\Http\Controllers\Home\City\MashhadController::class, 'almas'])->name('city.mashhad.almas');
    Route::get('boshra', [\App\Http\Controllers\Home\City\MashhadController::class, 'boshra'])->name('city.mashhad.boshra');
});

//Gillan
Route::prefix('city/gillan')->group(function () {
    Route::get('jahan', [\App\Http\Controllers\Home\City\GillanController::class, 'jahan'])->name('city.gillan.jahan');
    Route::get('pamchal', [\App\Http\Controllers\Home\City\GillanController::class, 'pamchal'])->name('city.gillan.pamchal');
    Route::get('arka', [\App\Http\Controllers\Home\City\GillanController::class, 'arka'])->name('city.gillan.arka');
});

//Tehran
Route::prefix('city/tehran')->group(function () {
    Route::get('espinas', [\App\Http\Controllers\Home\City\TehranController::class, 'espinas'])->name('city.tehran.espinas');
    Route::get('parsyan', [\App\Http\Controllers\Home\City\TehranController::class, 'parsyan'])->name('city.tehran.parsyan');
    Route::get('palas', [\App\Http\Controllers\Home\City\TehranController::class, 'palas'])->name('city.tehran.palas');
});

//Shiraz
Route::prefix('city/shiraz')->group(function () {
    Route::get('zandye', [\App\Http\Controllers\Home\City\ShirazController::class, 'zandye'])->name('city.shiraz.zandye');
    Route::get('bh', [\App\Http\Controllers\Home\City\ShirazController::class, 'bh'])->name('city.shiraz.bh');
    Route::get('chamran', [\App\Http\Controllers\Home\City\ShirazController::class, 'chamran'])->name('city.shiraz.chamran');
});
