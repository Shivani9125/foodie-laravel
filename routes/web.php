<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\CheckoutController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
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
Route::get('add-to-cart',[mycontroller::class,'cartList']);
Route::get('removecart/{Id}',[mycontroller::class,'removeCart']);
Route::get('cash_order',[mycontroller::class,'cash_order']);
Route::get('order',[mycontroller::class,'Order_view']);
Route::get('cart',[mycontroller::class,'view']);
Route::view('add-orders','add-orders');
//Route::get('add-orders',[mycontroller::class,'addtoOrder']);
Route::post('add-orders',[mycontroller::class,'addtoOrder']);
Route::get('add-orders',[mycontroller::class,'orderList']);
Route::get('removeorder/{Id}',[mycontroller::class,'removeOrder']);
Route::get('cash_on_delivery',[mycontroller::class,'cash_on_delivery']);
Route::get('order',[mycontroller::class,'order']);
Route::get('print_pdf/{id}',[mycontroller::class,'print_pdf']);
Route::get('diet',[mycontroller::class,'diet']);
Route::post('diet',[mycontroller::class,'diet']);
Route::view('diet','diet');
Route::get('DailyDiet',[mycontroller::class,'DailyDiet']);
Route::post('DailyDiet',[mycontroller::class,'DailyDiet']);
Route::get('WeekDays',[mycontroller::class,'WeekDays']);
Route::post('WeekDays',[mycontroller::class,'WeekDays']);
Route::get('WeekEnds',[mycontroller::class,'WeekEnds']);

Route::post('WeekEnds',[mycontroller::class,'WeekEnds']);

//Route::get('/stripe/{totalprice}',[mycontroller::class,'stripe']);
// Route::post('stripe',[mycontroller::class,'stripePost'])->name('stripe.post');
Route::get('/checkout',[CheckoutController::class,'checkout']);
Route::post('/checkout',[CheckoutController::class,'checkout']);