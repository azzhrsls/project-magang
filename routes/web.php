<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrgMasukController;


Route::get('/', function () {
    return view('dashboard');
});


Route::get('/brgmasuk', [BrgMasukController::class, 'index']);