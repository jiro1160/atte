<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;

Route::get('/register', [RegisteredUserController::class, 'getRegister']);
