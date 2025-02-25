<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentsController;

Route::view('/', 'pages.home')->name('home');
Route::view('makeup', 'pages.makeup')->name('makeup');
Route::view('book-appointment', 'pages.payments')->name('booking');
Route::post('pay', [PaymentsController::class, 'processPayment'])->name('pay');

Route::view('about', 'pages.about-us')->name('about');
Route::view('brows', 'pages.brows')->name('brows');
Route::view('contact', 'pages.contact-us')->name('contact');
Route::view('eyelashes', 'pages.eyelashes')->name('eyelashes');
Route::view('hair', 'pages.hair-shop')->name('hair');
Route::view('policy', 'pages.policy')->name('policy');
Route::view('pricing', 'pages.pricing')->name('pricing');
Route::view('reviews', 'pages.reviews')->name('reviews');
Route::view('services', 'pages.services')->name('services');
Route::view('testimonials', 'pages.testimonials')->name('testimonials');
Route::view('trainings', 'pages.trainings')->name('trainings');
