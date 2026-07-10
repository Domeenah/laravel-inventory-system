<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurityController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('home');
});

Route::get('/purity', [PurityController::class, 'index']);

Route::resource('items', ItemController::class);
