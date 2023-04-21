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
Route::view('dashboard','dashboard');
Route::post('loginUsers',[mycontroller::class,'login']);
Route::view('cart','cart');