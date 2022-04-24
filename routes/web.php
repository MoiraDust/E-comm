<?php

use App\Http\Controllers\ProductController;
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
//login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class,'login']);

//index product list
Route::get('/',[ProductController::class,'index']);

//detail pages
Route::get('details/{id}',[ProductController::class,'detail']);
Route::get('trending/{id}',[ProductController::class,'trending_detail']);

//cart
Route::post('add_to_cart',[ProductController::class,'addToCart']);

//search
Route::post('search',[ProductController::class,'search']);

//logout
Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});

//cart list
Route::get('cart',[ProductController::class,'cartList']);
