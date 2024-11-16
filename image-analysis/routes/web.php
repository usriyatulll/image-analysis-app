<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

// Home route (landing page)
Route::get('/', function () {
    return view('home');
});

// Upload route (form to upload image)
Route::get('/upload', [ImageController::class, 'index'])->name('upload');

// Handle image upload and send to Flask API
Route::post('/upload', [ImageController::class, 'upload'])->name('upload.image');

// Result route (display analysis result)
Route::get('/result', [ImageController::class, 'result'])->name('result');
