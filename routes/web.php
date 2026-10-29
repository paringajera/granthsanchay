<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Granth Sanchay
|--------------------------------------------------------------------------
| Informative marketing website for Granth Sanchay - Advanced Library Management Software.
| No database required.
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/screenshots', [PageController::class, 'screenshots'])->name('screenshots');
Route::get('/price', [PageController::class, 'price'])->name('price');
Route::get('/pricing', [PageController::class, 'price']); // Alias for convenience
Route::get('/support', [PageController::class, 'support'])->name('support');
Route::get('/schedule-a-demo', [PageController::class, 'scheduleDemo'])->name('schedule-demo');
Route::get('/schedule-demo', [PageController::class, 'scheduleDemo']); // Alias
Route::post('/schedule-a-demo', [PageController::class, 'submitDemo'])->name('schedule-demo.submit');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
