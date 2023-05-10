<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Http\Requests\AuthLoginUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        return redirect()->route('login');
    }
    public function auth(AuthLoginUserFormRequest $request){
        $credencias = $request->only('email', 'password');
        if(Auth::attempt($credencias)){
            return redirect()->route('index');
        }else{
            return redirect()->back()->with('danger', 'E-mail ou senha invalidos');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function edit($id){
        // if(!$id == auth()->user()->id){
        //     return redirect()->route('users.edit');
        // }
        if(!$user = User::find($id)){
            return redirect()-route('index');
        }
        return view('users.edit', compact('user'));
    }
    public function update(StoreUpdateUserFormRequest $request,$id){
        if(!$user = User::find($id)){
            return redirect()-route('index');
        }
        $data = $request->only('name', 'email');
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
       return redirect()->back();
    }
}
