<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/contatti', [ContactController::class, 'form'])->name('contact.form');
Route::post('/contatti/invio', [ContactController::class, 'send'])->name('contact.send');