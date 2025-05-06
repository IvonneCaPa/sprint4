<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;

Route::get('/', HomeController::class);

Route::controller(QuoteController::class)->group(function () {
    Route::get('quotes', 'index');
    Route::get('quotes/create', 'create');
    Route::get('quotes/{quote}', 'show');
});