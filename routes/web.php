<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('product.index')
        : redirect()->route('login');
});

Route::get('/product', [ProductController::class, 'index'])->middleware('auth')->name('product.index');
Route::get('/sales', [SaleController::class, 'index'])->middleware('auth')->name('sale.index');

Route::get('/sales/create', [SaleController::class, 'create'])->middleware('auth')->name('sale.create');
Route::post('/sales/store', [SaleController::class, 'store'])->middleware('auth')->name('sale.store');

Route::get('/product/create', [ProductController::class, 'create'])->middleware('auth')->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->middleware('auth')->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->middleware('auth')->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->middleware('auth')->name('product.update');
Route::post('/product/delete/{id}', [ProductController::class, 'destroy'])->middleware('auth')->name('product.delete');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'storeUser'])->name('register.post');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/logged', [UserController::class, 'authenticate'])->name('login.post');

Route::get('/logout', [UserController::class, 'logOutPage'])->name('logOutPage');
Route::post('/logout', [UserController::class, 'logOut'])->name('logOut.post');
