<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
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

Route::redirect('/', 'home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/home/about-us', 'about-us')->name('about-us');
Route::view('/home/contact-us', 'contact-us')->name('contact-us');
Route::view('/home/stores', 'stores')->name('stores');
Route::get('/shop', ShopController::class)->name('shop');
Route::middleware('guest')->group(function () {
    Route::view('/login',       'auth.login')->name('login');
    Route::view('/register',    'auth.register')->name('register');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('products', ProductController::class)->only('index', 'create');
    Route::resource('categories', CategoryController::class)->only('index', 'create');
    Route::get('/logout',  LogoutController::class)->name('logout');
});

