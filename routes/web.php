<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'pages.home')->name('home');
Route::view('makeup', 'pages.makeup')->name('makeup');
Route::view('book-appointment', 'pages.payments')->name('booking');
Route::post('/pay', 'PaymentsController@processPayment')->name('pay');
