<?php

use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\LoginController as AdminLoginConroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [LoginController::class, 'login'])->name('account.login');
        Route::get('signup', [LoginController::class, 'signup'])->name('account.signup');
        Route::post('signup-process', [LoginController::class, 'signupProcess'])->name('account.signupProcess');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('/home', [HomeController::class, 'index'])->name('account.home');
    });
});


Route::get('admin/login', [AdminLoginConroller::class, 'index'])->name('admin.loin');
Route::get('admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
Route::post('admin/authenticate', [AdminLoginConroller::class, 'authenticate'])->name('admin.authenticate');
