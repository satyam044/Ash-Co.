<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/login', [LoginController::class, 'login'])->name('account.login');
Route::post('/account/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
Route::get('/home', [HomeController::class, 'index'])->name('home');
