<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingcartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class,'index'])->name('homepage');
Route::get('/category/{slug_categoryName}', [CategoryController::class,'index'])->name('category');
Route::get('/product/{slug_productName}', [ProductController::class,'index'])->name('product');
Route::get('/shoppingCart', [ShoppingcartController::class,'index'])->name('shoppingCart');
Route::get('/payment', [PaymentController::class,'index'])->name('payment');
Route::get('/order', [OrderController::class,'index'])->name('order');

Route::group(['prefix' => 'users'], function () {
    Route::get('/login',[UserController::class, 'login_form'])->name('users.login');
    Route::get('/register',[UserController::class, 'register_form'])->name('users.register');
});




