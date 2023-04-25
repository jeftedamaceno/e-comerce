<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastro_user(){
        return view('users.cadastro');
    }
    public function login(){
        return view('users.login');
    }
}
