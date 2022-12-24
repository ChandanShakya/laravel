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
// ->middleware("auth")
// Without login chirna didaina
// ROute ma middle ware attached huncha
// middleware is set of rules


// blade and relationship

Route::get('/test/{id}', [DemoController::class, "demo"]);
Route::get('/product', [ProductController::class, "index"])->middleware("auth");
Route::get('/sales', [SaleController::class, "index"]);
Route::get('/product/create', [ProductController::class, "create"])->middleware("auth");
Route::post('/product/store', [ProductController::class, "store"]);
Route::get('/product/edit/{id}', [ProductController::class, "edit"]);
Route::post('/product/update/{id}', [ProductController::class, "update"]);
Route::get('/register', [UserController::class, "register"])->name("register");
Route::post('/register', [UserController::class, "storeUser"])->name("register.post");

Route::get('/login', [UserController::class, "login"])->name("login");
Route::post('/logged', [UserController::class, "authenticate"])->name("login.post");

Route::get('/logout', [UserController::class, "logOutPage"])->name("logOutPage");
Route::post('/logout', [UserController::class, "logOut"])->name("logOut.post");
