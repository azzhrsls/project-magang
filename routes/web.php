<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrgMasukController;
use App\Http\Controllers\LihatGudangController;


Route::get('/', function () {
    return view('dashboard');
});


Route::get('/brgmasuk', [BrgMasukController::class, 'index']);

Route::get("/lihatgudang", [LihatGudangController::class, 'index']);
Route::get("/gudang/gudanga", [LihatGudangController::class, 'gudanga'])->name('gudanga');
Route::get("/gudang/gudangb", [LihatGudangController::class, 'gudangb'])->name('gudangb');
Route::get("/gudang/gudangc", [LihatGudangController::class, 'gudangc'])->name('gudangc');
Route::get("/gudang/gudangd", [LihatGudangController::class, 'gudangd'])->name('gudangd');
