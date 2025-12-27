<?php

use Illuminate\Support\Facades\Route;

// Landing
Route::view('/', 'landing')->name('landing');

// Public pages (Orbana.mx)
Route::prefix('/')
  ->name('public.')
  ->group(function () {

    // Páginas dedicadas
    Route::view('/app-driver', 'public.driver')->name('driver');
    Route::view('/despacho', 'public.dispatch')->name('dispatch');

    // Legal
    Route::view('/terminos', 'public.terms')->name('terms');
    Route::view('/privacidad', 'public.privacy')->name('privacy');
  });

Route::view('/legal/pasajero/terminos', 'public.terms.passenger')
    ->name('legal.passenger.terms');
