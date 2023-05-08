<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('login','login');
Route::view('register','register');
Route::post('insertData',[mycontroller::class,'insert']);
Route::get('dashboard',[mycontroller::class,'dashboard']);
Route::post('loginUsers',[mycontroller::class,'login']);
Route::get('cart',[mycontroller::class,'view']);
Route::view('order','order');
Route::view('add-to-cart','add-to-cart');
Route::post("add-to-cart",[mycontroller::class,'addtoCart']);
Route::get('add-to-cart', [mycontroller::class, 'addtoCart']);
Route::get('removecart/{Id}',[mycontroller::class,'removeCart']);
Route::get('cash_order',[mycontroller::class,'cashOrder']);
