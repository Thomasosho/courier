<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/client', function () {
    return view('client'); 
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/track', function () {
    return view('track');
});

Auth::routes(['register' => false]);

Route::get('/changePassword', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/tracker', TrackController::class)->middleware('auth');

Route::any('/tracs', [SearchController::class, 'index']);

Route::get('/receipt/{id}', [ReceiptController::class, 'show'])->middleware('auth');

Route::resource('/deposit', DepositController::class)->middleware('auth');
