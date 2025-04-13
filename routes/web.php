<?php

use App\Http\Controllers\CurrencyConverterController;
use Illuminate\Support\Facades\Route;
use App\Services\AwesomeAPICotacoes\AwesomeAPI;

Route::get('/', function () {
    return view('home');
});

Route::post('/convert', [CurrencyConverterController::class, 'convert'])->name('convert');