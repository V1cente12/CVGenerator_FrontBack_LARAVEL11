<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/generate-cv', [PDFController::class, 'generatePDF']);
