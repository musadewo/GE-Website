<?php

use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
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

Route::get('/', function () {
    // return view('home.index');
    $data = [
        'content' => 'Frontend/home/index'
    ];
    return view('Frontend.layouts.wrapper', $data);
});

Route::get('/service', function () {
    // return view('home.index');
    $data = [
        'content' => 'Frontend/service/index'
    ];
    return view('Frontend.layouts.wrapper', $data);
});

Route::get('/about', function () {
    // return view('home.index');
    $data = [
        'content' => 'Frontend/about/index'
    ];
    return view('Frontend.layouts.wrapper', $data);
});

Route::get('/contact', function () {
    // return view('home.index');
    $data = [
        'content' => 'Frontend/contact/index'
    ];
    return view('Frontend.layouts.wrapper', $data);
});

Route::get('/login', function () {
    // return view('home.index');
    $data = [
        'content' => 'Frontend/auth/login'
    ];
    return view('Frontend.layouts.wrapper', $data);
});

// Admin Route
Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', function(){
        $data = [
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    });
    Route::resource('/service', AdminServiceController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);
});