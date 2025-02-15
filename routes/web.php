<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\store\HomePageController;

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
Route::middleware(['extract.website.name'])->group(function () {

// Route::get('/', [HomePageController::class,'index']);
// Route::get('/shop', [HomePageController::class,'shop']);

Route::get('/', [HomePageController::class,'shop']);
Route::get('/account', [HomePageController::class,'showCustomerAccount']);
Route::get('/contact', [HomePageController::class,'contact']);
// Route::get('/trackyourorder', [OrderController::class,'trackOrder']);
Route::get('/product/{id}', [HomePageController::class,'showProduct']);
Route::get('/buynow/{id}', [HomePageController::class,'buyProduct']);
Route::get('/ordersuccess/{id}', [HomePageController::class,'orderSuccess']);
Route::post('/submitbuynow', [HomePageController::class,'submitBuyProduct']);

});

Route::middleware(['authCustomCheck'])->group(function(){

Route::get('/admindashboard', [DashboardController::class,'dashboard']);
Route::get('/adminorders', [OrderController::class,'index']);
Route::get('/adminproducts', [ProductController::class,'showUserProducts']);
Route::get('/admincustomers', [UserController::class,'showUserCustomers']);
Route::get('/adminpayments', [PaymentController::class,'showUserPayments']);

Route::get('/adminprofile', [UserController::class,'showProfile']);

Route::get('/logout', [UserController::class,'logout']);

});

Route::post('/attemptlogin', [UserController::class,'doLogin']);
Route::post('/attemptsignup', [UserController::class,'doSignup']);

Route::get('/adminsignup', [UserController::class,'showSignup']);
Route::get('/adminlogin', [UserController::class,'showLogin'])->name('login');

