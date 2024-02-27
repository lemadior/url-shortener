<?php

use App\Http\Controllers\Short\RedirectController;
use App\Http\Controllers\Short\IndexController;
use App\Http\Controllers\Short\CreateController;
use App\Http\Controllers\Short\ShortenController;
use App\Http\Controllers\Short\ShowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function() {
    return response()->view('main.404', [], 404);
});

Route::namespace('App\Http\Controllers\Short')->group(function() {
    Route::get('/', IndexController::class)->name('home');
    Route::get('/shorten', [ShortenController::class, 'index'])->name('shorten');
    Route::post('/alias', [CreateController::class, 'index'])->name('create.alias');
    Route::get('/links', [ShowController::class, 'list'])->name('links');
    Route::get('/show/{link}', [ShowController::class, 'show'])->name('link');
    Route::get('/original/{shortlink}', [RedirectController::class, 'index'])->name('redirect.original');
});
