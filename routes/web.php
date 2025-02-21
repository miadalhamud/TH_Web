<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialtyController;


Route::get('/', [SpecialtyController::class, 'index']);

Route::get('/specialty/{id}', [SpecialtyController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

