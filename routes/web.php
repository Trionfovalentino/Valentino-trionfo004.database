<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::resource('articles', ArticleController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::resource('articles', ArticleController::class);