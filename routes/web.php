<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/users/login', [UserController::class, 'login']
)->name('login');

Route::get('/users/cadastro_user', [UserController::class, 'cadastro_user']
)->name('cadastro_user');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::post('/users/auth', [UserController::class, 'auth'])->name('users.auth');

Route::get('users/logout', [UserController::class, 'logout'])->name('users.logout');