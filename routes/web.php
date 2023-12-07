<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentstatusController;
use App\Http\Controllers\NotiseController;


// Front-end Start
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/instructor',[HomeController::class,'instructor'])->name('instructor');
Route::get('/notice',[HomeController::class,'notice'])->name('notice');
Route::get('admission',[HomeController::class,'admission'])->name('admission');
Route::get('curriculum',[HomeController::class,'curriculum'])->name('curriculum');
Route::get('gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/payment/system',[HomeController::class,'paymentSystem'])->name('paymentsystem');
Route::get('/payment/from',[HomeController::class,'paymentForm'])->name('paymentform');
Route::get('/payment/status',[HomeController::class,'status'])->name('status');


// Front-end  End




// Back-end Start

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/payment/print',[DashboardController::class,'paymentPrint'])->name('paymentprint');
    Route::resources(['paymentstatuses'=>PaymentstatusController::class]);
    Route::resources(['notise'=>NotiseController::class]);
});


