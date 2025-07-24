<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/login', [LoginController::class, 'login'])->name('account.login');
Route::get('/account/signup', [LoginController::class, 'signup'])->name('account.signup');
Route::post('/account/signup-process', [LoginController::class, 'signupProcess'])->name('account.signupProcess');
Route::post('/account/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');

Route::get('/home', [HomeController::class, 'index'])->name('home');
