<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;

Route::get('/', HomeController::class);

 Route::controller(QuoteController::class)->group(function () {
     Route::get('quotes', 'index')->name('quotes.index');
     Route::get('quotes/create', 'create')->name('quotes.create');
     Route::post('quotes', 'store')->name('quotes.store');
     Route::get('quotes/{quote}', 'show')->name('quotes.show');
     Route::get('quotes/{quote}/edit', 'edit')->name('quotes.edit');
     Route::put('quotes/{quote}', 'update')->name('quotes.update');
     Route::delete('quotes/{quote}', 'destroy')->name('quotes.destroy');
 });


