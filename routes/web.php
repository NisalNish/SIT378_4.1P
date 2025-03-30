<?php

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
