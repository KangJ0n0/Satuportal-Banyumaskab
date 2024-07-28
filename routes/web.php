<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EventController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/dashboard', [BeritaController::class, 'index']);

Route::get('/dashboard', [EventController::class, 'index']);
