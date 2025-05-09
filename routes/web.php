<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\PhotoController;


Route::get('/', HomeController::class);

//  Route::controller(QuoteController::class)->group(function () {
//      Route::get('quotes', 'index')->name('quotes.index');
//      Route::get('quotes/create', 'create')->name('quotes.create');
//      Route::post('quotes', 'store')->name('quotes.store');
//      Route::get('quotes/{quote}', 'show')->name('quotes.show');
//      Route::get('quotes/{quote}/edit', 'edit')->name('quotes.edit');
//      Route::put('quotes/{quote}', 'update')->name('quotes.update');
//      Route::delete('quotes/{quote}', 'destroy')->name('quotes.destroy');
//  });

// rutas para las citas
Route::resource('quotes', QuoteController::class)->parameters('quotes', 'quote');


// rutas para las fotos
Route::resource('photos', PhotoController::class)->parameters(['photos', 'photo']);

// Rutas para las galerías
//Route::resource('galleries', GalleryController::class)->parameters(['galleries', 'gallery']);
