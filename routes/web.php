<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminHighlightController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{id}', [HomeController::class, 'productDetail'])->name('product.detail');
Route::get('/news/{id}', [HomeController::class, 'newsDetail'])->name('news.detail');


Route::get('/about', function () {
    return view('home.about.index');
});

//Contact Kirim Pesan
Route::get('/contact', [HomeContactController::class, 'index']);
Route::post('/contact/send', [HomeContactController::class, 'send']);

//Login Dawg
Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest'); //Ini terhubung dengan middleware
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

//Ini Route Admin
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/logout',[AdminAuthController::class, 'logout']);
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

Route::resource('/service', AdminServiceController::class);
Route::resource('/slider', AdminSliderController::class);
Route::resource('/user', AdminUserController::class);
Route::resource('/news', AdminNewsController::class);
Route::resource('/product',AdminProductController::class);
Route::resource('/massage',AdminPesanController::class);
Route::resource('/highlight', AdminHighlightController::class);


//Route Khusus Untuk About
Route::get('/about',[AdminAboutController::class, 'index']);
Route::put('/about/update ',[AdminAboutController::class, 'update']);
});