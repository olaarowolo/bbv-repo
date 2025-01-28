<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentsController;

Route::view('/', 'pages.home')->name('home');
Route::view('makeup', 'pages.makeup')->name('makeup');
Route::view('book-appointment', 'pages.payments')->name('booking');
Route::post('pay', [PaymentsController::class, 'processPayment'])->name('pay');
