<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
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

Route::get('/home',[UserController::class,'home'])->name('home');

Route::post('/login-form',[AuthController::class,'login'])->name('login-form');
Route::post('/register',[AuthController::class,'register']);
// protect login route and register 
Route::middleware(['guest'])->group(function () {
    Route::get('/login',[AuthController::class,'loginForm'])->name('login');
    Route::get('/register',[AuthController::class,'registerForm'])->name('register');
});
Route::get('/order-detailed/{id}',[LogisticController::class,'orderDetail'])->name('order-detailed');
// protect other route 
Route::middleware(['userRole'])->group(function(){
    Route::get('/shipping-view',[LogisticController::class,'home'])->name('shipping-view');
    Route::post('/add-new-shipping',[LogisticController::class,'storeNewForm'])->name('add-new-shipping');
    Route::get('/add-new-shipping-order',[LogisticController::class,'addNewForm'])->name('add-new-shipping-order');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});
Route::middleware(['role'])->group(function () {
    Route::get('admin/shipping-view',[AdminController::class,'shippingView'])->name('admin/shipping-view');
    Route::get('staff/shipping-list',[AdminController::class,'shippingList'])->name('staff/shipping-list');
    Route::post('staff/shipping-list/update',[AdminController::class,'shippingListPost'])->name('staff/shipping-list/update');
    Route::get('staff/processing-list',[AdminController::class,'processingList'])->name('staff/processing-list');
    Route::post('staff/processing-list/update',[AdminController::class,'processingListUpdateStatus'])->name('staff/processing-list/update');
    Route::get('admin/order-detail/{id}',[AdminController::class,'orderDetail'])->name('admin/order-detail');
});
Route::get('/user-review/{id}',[ReviewController::class,'reviewForm'])->name('user-review');
Route::post('/user-review',[ReviewController::class,'postReview'])->name('user-review');