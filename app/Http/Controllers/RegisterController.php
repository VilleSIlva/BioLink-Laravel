<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        if($request->tryToRegister()){
            return to_route('dashboard');
        }

        return back()->withInput()->with('error','Ocorreu um erro ao se registrar');
    }
}
