<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id}',[DemoController::class,"demo"]);
Route::get('/product',[ProductController::class,"index"]);
Route::get('/sales',[SaleController::class,"index"]);
Route::get('/product/create',[ProductController::class,"create"]);
Route::post('/product/store',[ProductController::class,"store"]);
Route::get('/product/edit/{id}',[ProductController::class,"edit"]);
Route::post('/product/update/{id}',[ProductController::class,"update"]);
Route::get('/user',[UserController::class,"index"]);
Route::post('/register',[UserController::class,"storeUser"]);

Route::get('/login',[UserController::class,"login"]);
Route::post('/logged',[UserController::class,"authenticate"]);

