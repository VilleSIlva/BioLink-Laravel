<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        if($request->tryToLogin()){
            return to_route('dashboard');
        }

        return back('dashboard')->with('error','Credenciais invàlida');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}
