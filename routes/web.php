<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix('cake-baker')->group(function(){
    //trang chu
    Route::get('/', [ProductController::class,'getCakeBaker'])->name('home');
    Route::get('/chi-tiet/{id}', [ProductController::class,'productDetail'])->name('product-detail');
    Route::get('/them-vao-gio-hang/{id}',[CartController::class,'addCart'])->name('add.cart');
    Route::get('/update-gio-hang/{id}',[CartController::class,'minusCart'])->name('minus.cart');
    Route::get('/chi-tiet-gio-hang',[CartController::class,'showCart'])->name('show.cart');
    Route::get('/delete-gio-hang/{id}',[CartController::class,'removeCart'])->name('delete.cart');

//    check out
    Route::get('/thong-tin-mua-hang',[CheckOutController::class,'showChckOut'])->name('show.check-out');

});
;
Route::get('/product-detail',function(){
   return view('page.product-detail');
});
Route::get('/cart',function(){
    return view('page.cart');
});

Route::get('/check-out',function(){
    return view('page.check-out');
});
Route::get('/order-detail',function(){
    return view('page.order-detail');
});

Route::get('/order',function(){
    return view('admin.order.list');
});



//
//
//Route::get('/admin',[LoginController::class,'login'])->name('login');
//Route::post('admin/login',[LoginController::class,'checkLogin'])->name('admin.login');
//Route::get('admin/logout',[LoginController::class,'logout'])->name('admin.logout');
//Route::middleware('auth')->prefix('admin')->group(function(){
//    Route::get('/',[AdminController::class,'index'])->name('dashboard');
    //user
    Route::prefix('user')->group(function(){
        Route::get('/',[UserController::class,'index'])->name('user.list');
        Route::get('/show-create',[UserController::class,'showCreate'])->name('user.create');
        Route::post('/create',[UserController::class,'store'])->name('user.store');
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
        Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    });
//category
    Route::prefix('category')->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('category.list');
        Route::post('/create',[CategoryController::class,'store'])->name('category.store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    });
//role
    Route::prefix('role')->group(function(){
        Route::get('/',[RoleController::class,'index'])->name('role.list');
        Route::post('/create',[RoleController::class,'store'])->name('role.store');
        Route::get('/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
        Route::post('/update/{id}',[RoleController::class,'update'])->name('role.update');
        Route::get('/delete/{id}',[RoleController::class,'delete'])->name('role.delete');
    });
//    product
Route::prefix('product')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('product.list');
    Route::get('/show-create',[ProductController::class,'create'])->name('product.create');
    Route::post('/create',[ProductController::class,'store'])->name('product.store');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
});

//order
Route::get('order',[OrderController::class,'index'])->name('order.list');
//});

