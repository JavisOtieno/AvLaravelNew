<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/orders', [TripController::class, 'index']);
Route::get('/order/{id}', [TripController::class, 'show']);

Route::get('/customers', [CustomerController::class, 'index']);
Route::post('/addcustomer', [CustomerController::class, 'saveCustomer']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/payments', [CustomerController::class, 'index']);

});


Route::post('/login', [LoginController::class,'doLogin']);
Route::post('/signup', [LoginController::class,'doSignup']);
