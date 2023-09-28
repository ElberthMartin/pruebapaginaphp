<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'showForm']);
Route::post('/registrar', [ClienteController::class, 'register'])->name('registrar');
