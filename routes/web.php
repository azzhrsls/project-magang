<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BrgMasukController;


Route::get('/', function () {
    return view('dashboard');
});



Route::get("/registrasi", [LoginController::class, 'registrasi'])->name('registrasi');

Route::get("/login", [LoginController::class, 'login'])->name('login');
Route::post("/login-proses", [LoginController::class, 'login_proses'])->name('login-proses');

Route::get('/brgmasuk', [BrgMasukController::class, 'index']);