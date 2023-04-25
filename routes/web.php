<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('login', [UserController::class, 'login']
)->name('login');

Route::get('cadastro_user', [UserController::class, 'cadastro_user']
)->name('cadastro_user');
