<?php

use App\Http\Controllers\api\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function(){

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/contact', [ContactController::class, 'showContact']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/order/{id}', [OrderController::class, 'showOrder']);

// Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'showProduct']);

Route::get('/customers', [CustomerController::class, 'index']);
Route::post('/addcustomer', [CustomerController::class, 'saveCustomer']);
Route::get('/customer/{id}', [CustomerController::class, 'showCustomer']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/payment/{id}', [PaymentController::class, 'showPayment']);


});

//products outside for openai responses
Route::get('/products', [ProductController::class, 'index']);


//temporary admin bound links
Route::get('/updateprices', [ProductController::class,'updateProductPrices']);
//temporary admin bound links


Route::post('/login', [LoginController::class,'doLogin']);
Route::post('/signup', [LoginController::class,'doSignup']);
