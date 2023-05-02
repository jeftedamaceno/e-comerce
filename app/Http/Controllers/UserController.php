<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastro_user(){
        return view('users.cadastro');
    }
    public function login(){
        return view('users.login');
    }
    public function store(StoreUpdateUserFormRequest $request){
        
        $data = request()->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);
        
        return redirect()->route('index');
    }
}
