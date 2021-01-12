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

Route::post('/search', [ProductController::class,'search'])->name('product_search');
Route::get('/search', [ProductController::class,'search'])->name('product_search');

Route::group(['prefix' => 'shoppingCart'], function () {
    Route::get('/', [ShoppingcartController::class,'index'])->name('shoppingCart');
    Route::post('/add',[ShoppingcartController::class,'add'])->name('shoppingCart.add');
    Route::delete('/delete/{rowId}',[ShoppingcartController::class,'delete'])->name('shoppingCart.delete');
    Route::delete('bosalt',[ShoppingcartController::class,'clear'])->name('shoppingCart.clear');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/payment', [PaymentController::class,'index'])->name('payment');
    Route::get('/orders', [OrderController::class,'index'])->name('orders');
    Route::get('/orders/{id}', [OrderController::class,'detail'])->name('order');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/login',[UserController::class, 'login_form'])->name('users.login');
    Route::post('/login',[UserController::class, 'login']);
    Route::get('/register',[UserController::class, 'register_form'])->name('users.register');
    Route::post('/register',[UserController::class, 'register']);
    Route::get('/activate/{key}',[UserController::class, 'activate'])->name('activate');
    Route::post('/logout',[UserController::class, 'logout'])->name('users.logout');
});




