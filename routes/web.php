<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', function() {
    if(session('name')) {
        return redirect('/');
    }
    return view('register');
});

Route::post('/register',[HomeController::class, 'register'])->name('register');

Route::get('/login', function() {
    if(session('name')) {
        return redirect('/');
    }
    return view('login');
});

Route::post('/login',[HomeController::class, 'login'])->name('login');

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');;
