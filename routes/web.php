<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/home/about-us', 'about-us')->name('about-us');
Route::view('/home/contact-us', 'contact-us')->name('contact-us');
Route::get('/shop', ShopController::class)->name('shop');
Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::resource('products', ProductController::class)->only('index', 'create');
