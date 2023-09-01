<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LogisticController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::post('/login-form',[AuthController::class,'login'])->name('login-form');
Route::post('/register',[AuthController::class,'register']);
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
// protect login route and register 
Route::middleware(['guest'])->group(function () {
    Route::get('/login',[AuthController::class,'loginForm'])->name('login');
    Route::get('/register',[AuthController::class,'registerForm'])->name('register');
});
Route::post('/add-new-shipping',[LogisticController::class,'storeNewForm'])->name('add-new-shipping');
Route::post('/edit-shipping-order',[LogisticController::class,'postEditForm'])->name('edit-shipping-order');
// protect other route 
Route::middleware(['auth'])->group(function () {
   Route::get('/shipping-view',[LogisticController::class,'home'])->name('shipping-view');
   Route::get('/add-new-shipping-order',[LogisticController::class,'addNewForm'])->name('add-new-shipping-order');
   Route::get('/order-detailed/{id}',[LogisticController::class,'orderDetail'])->name('order-detailed');
});
Route::middleware(['role'])->group(function () {
    Route::get('admin/shipping-view',[AdminController::class,'shippingView'])->name('admin/shipping-view');
});
Route::get('/user-review/{id}',[UserController::class,'reviewForm'])->name('user-review');