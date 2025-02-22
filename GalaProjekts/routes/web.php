<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/php', function () {
    return view('main');
});

Route::post('RegsaveItem', [RegController::class, 'RegsaveItem'])->name('RegsaveItem');