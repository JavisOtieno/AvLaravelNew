<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\store\HomePageController;

//video convert test
use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\X264;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


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
Route::get('/category/{category}', [HomePageController::class,'showCategory']);
Route::get('/search', [HomePageController::class,'searchProducts']);
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
Route::get('/admincustomers', [CustomerController::class,'index']);
Route::get('/adminpayments', [PaymentController::class,'showUserPayments']);

Route::get('/adminprofile', [UserController::class,'showProfile']);
Route::get('/admincontact', [UserController::class,'showContact']);
Route::get('/adminwebsite', [UserController::class,'showWebsite']);

Route::get('/vieworder/{id}', [OrderController::class,'viewOrder']);
Route::get('/viewpayment/{id}', [PaymentController::class,'viewPayment']);
Route::get('/viewproduct/{id}', [ProductController::class,'viewProduct']);
Route::get('/viewcustomer/{id}', [CustomerController::class,'viewCustomer']);

Route::get('/logout', [UserController::class,'logout']);

});

Route::middleware(['extract.website.name'])->group(function () {

Route::post('/attemptlogin', [UserController::class,'doLogin']);
Route::post('/attemptsignup', [UserController::class,'doSignup']);

Route::get('/adminsignup', [UserController::class,'showSignup']);
Route::get('/adminlogin', [UserController::class,'showLogin'])->name('login');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('/forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post'); 
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/successpasswordreset', [ForgotPasswordController::class, 'showSuccessForgotPassword'])->name('forgot.password.success');

Route::get('/convertvideo', function () {
    // $ffmpeg = app(FFMpeg::class);

    // $inputPath = storage_path('app/public/input.mov');
    // $outputPath = storage_path('app/public/output.mp4');

    // // Open and convert video
    // $video = $ffmpeg->open($inputPath);
    // $video->save(new X264(), $outputPath);

    // return Response::download($outputPath);
    // Optional config (adjust binary paths if needed)
$ffmpeg = FFMpeg::create([
    'ffmpeg.binaries'  => '/usr/bin/ffmpeg',
    'ffprobe.binaries' => '/usr/bin/ffprobe',
    'timeout'          => 3600, // optional
    'ffmpeg.threads'   => 12,   // optional
]);

$video = $ffmpeg->open(storage_path('app/public/input.mov'));

$video->save(new X264(), storage_path('app/public/output.mp4'));

});

});


