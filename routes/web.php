<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingcartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Yonetim;

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

    Route::PATCH('/guncelle/{rowId}',[ShoppingcartController::class,'update'])->name('shoppingCart.update');
});

Route::get('/payment', [PaymentController::class,'index'])->name('payment');
Route::post('/payment', [PaymentController::class,'payment'])->name('payment');

Route::group(['middleware' => 'auth'], function () {
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

/*
|--------------------------------------------------------------------------
|Admin Kısmı
|-----------------------------------
*/

Route::group(['prefix' => 'yonetim','namespace' => 'Yonetim'], function () {

    Route::redirect('/', '/yonetim/login');


    Route::match(['get' , 'post'],'/login', [Yonetim\UserController::class, 'login'])->name('yonetim.login');
    Route::get('/oturumukapat', [Yonetim\UserController::class, 'logout'])->name('yonetim.logout');

    Route::group(['middleware' => 'yonetim'], function () {
        Route::get('/anasayfa', [Yonetim\HomeController::class, 'index'])->name('yonetim.homepage');
    });

    //yonetim/kullanici
    Route::group(['prefix' => 'kullanici'], function () {

        Route::match(['get', 'post'], '/', [Yonetim\UserController::class, 'index'])->name('yonetim.user.index');

        Route::get('/yeni', [Yonetim\UserController::class, 'form'])->name('yonetim.user.create');
        Route::get('/duzenle/{id}', [Yonetim\UserController::class, 'form'])->name('yonetim.user.update');
        Route::post('/kaydet/{id?}', [Yonetim\UserController::class, 'save'])->name('yonetim.user.save');
        Route::get('/sil/{id}', [Yonetim\UserController::class, 'delete'])->name('yonetim.user.delete');
    });
        //yonetim/urun
        Route::group(['prefix' => 'urun'], function () {

            Route::match(['get', 'post'], '/', [Yonetim\ProductController::class, 'index'])->name('yonetim.product.index');

            Route::get('/yeni', [Yonetim\ProductController::class, 'form'])->name('yonetim.product.create');
            Route::get('/duzenle/{id}', [Yonetim\ProductController::class, 'form'])->name('yonetim.product.update');
            Route::post('/kaydet/{id?}', [Yonetim\ProductController::class, 'save'])->name('yonetim.product.save');
            Route::get('/sil/{id}', [Yonetim\ProductController::class, 'delete'])->name('yonetim.product.delete');
        });

        //yonetim/kategori
        Route::group(['prefix' => 'kategori'], function () {

            Route::match(['get', 'post'], '/', [Yonetim\CategoryController::class, 'index'])->name('yonetim.category.index');

            Route::get('/yeni', [Yonetim\CategoryController::class, 'form'])->name('yonetim.category.create');
            Route::get('/duzenle/{id}', [Yonetim\CategoryController::class, 'form'])->name('yonetim.category.update');
            Route::post('/kaydet/{id?}', [Yonetim\CategoryController::class, 'save'])->name('yonetim.category.save');
            Route::get('/sil/{id}', [Yonetim\CategoryController::class, 'delete'])->name('yonetim.category.delete');
        });
});
