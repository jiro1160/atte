<?php

use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'getRegister']);
Route::post('/register', [RegisteredUserController::class, 'register']);
