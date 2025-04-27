<?php

use App\Http\Controllers\CurrencyConverterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurrencyConverterController::class, 'home'])->name('home');
Route::post('/convert', [CurrencyConverterController::class, 'convert'])->name('convert');