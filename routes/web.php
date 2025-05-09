<?php


use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class);

// rutas para las citas
Route::resource('quotes', QuoteController::class)->parameters('quotes', 'quote');

// Rutas para galerías
Route::resource('galleries', GalleryController::class);

// Rutas para fotos (anidadas con galerías)
Route::resource('galleries.photos', PhotoController::class)->except(['show']);








