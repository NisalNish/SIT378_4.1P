<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;

Route::get('/feedback', [FeedbackController::class, 'create']);
Route::post('/feedback', [FeedbackController::class, 'store']);


Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
