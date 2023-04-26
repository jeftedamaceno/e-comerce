<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('login', [UserController::class, 'login']
)->name('login');

Route::get('cadastro_user', [UserController::class, 'cadastro_user']
)->name('cadastro_user');

Route::post('users/create_user', [UserController::class, 'create_user'])->name('users.create_user');
