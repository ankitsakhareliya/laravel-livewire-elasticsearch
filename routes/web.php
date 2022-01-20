<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeoLocationController;
use Stevebauman\Location\Facades\Location;

Route::get('get-address-from-ip', [GeoLocationController::class, 'index']);
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





Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
