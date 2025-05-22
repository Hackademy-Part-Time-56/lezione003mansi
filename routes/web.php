<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


//static routes

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('/chisiamo', [PageController::class, 'chisiamo'])->name('howarewe');
Route::get('/servizi', [PageController::class, 'servizi'])->name('services');

Route::get('/dettaglio/{service}', [PageController::class, 'detail'])->name('dettaglio');
