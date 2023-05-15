<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\FrontendHomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendHomeController::class, 'index']);
Route::get('/about', [FrontendHomeController::class, 'about']);
Route::get('/service', [FrontendHomeController::class, 'service']);

Route::get('/contact', function () {
    // return view('home.index');
    $data = [
        'content' => 'Frontend/contact/index'
    ];
    return view('Frontend.layouts.wrapper', $data);
});

Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

// Admin Route
Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/logout', [AdminAuthController::class, 'logout']);
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/about', [AdminAboutController::class, 'index']);
    Route::put('/about/update', [AdminAboutController::class, 'update']);
    Route::get('/banner', [AdminBannerController::class, 'index']);
    Route::put('/banner/update', [AdminBannerController::class, 'update']);
    Route::get('/contact', [AdminContactController::class, 'index']);
    Route::put('/contact/update', [AdminContactController::class, 'update']);
    Route::resource('/service', AdminServiceController::class);
    Route::resource('/user', AdminUserController::class);
});