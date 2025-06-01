<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\electronicsController ;
use App\Http\Controllers\CartController ;
use App\Http\Controllers\authController ;
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

Route::get('/', action: [electronicsController::class,'welcome'] )->name('welcome');
Route::get('/electronics', [electronicsController::class, 'index'])->name('electronics.index');
Route::get('/electronics/idea', action: [electronicsController::class, 'idea'])->name('electronics.idea');
Route::get(uri: '/electronics/analysis', action: [electronicsController::class, 'analysis'])->name('electronics.analysis');
Route::get(uri: '/electronics/create', action: [electronicsController::class, 'create'])->name('electronics.create');

Route::post(uri: '/auth/logout', action: [authController::class, 'logout'])->name('auth.logout');
Route::get(uri: '/auth/signup', action: [authController::class, 'signup'])->name('auth.signup');
Route::get(uri: '/auth/login', action: [authController::class, 'login'])->name('auth.login');
Route::post(uri: '/auth/login', action: [authController::class, 'loginStore'])->name('login.store');
Route::post(uri: '/auth/signup', action: [authController::class, 'signupStore'])->name('signup.store');


Route::get(uri: '/electronics/{id}', action: [electronicsController::class, 'show'])->name('electronics.show');
Route::get(uri: '/user/profile/{id}', action: [electronicsController::class, 'profile'])->name('user.profile');
Route::post(uri: '/electronics/store', action: [electronicsController::class, 'store'])->name('electronics.store');
Route::get('/products/filter', action: [electronicsController::class, 'filter'])->name('products.filter');
Route::get('/products/search', action: [electronicsController::class, 'search'])->name('products.search');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});
