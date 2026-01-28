<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
    // Route Login
    Route::get('/',[LoginController::class, 'create'])->name('login.create');
    Route::post('/',[LoginController::class, 'store'])->name('login');     
    
    // Route Register
    Route::get('/register',[RegisterController::class, 'create'])->name('register.create');
    Route::post('/register',[RegisterController::class, 'store'])->name('register');
});



Route::prefix("/dashboard")->group(function(){
    // Route Dashboard
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
})->middleware("auth");