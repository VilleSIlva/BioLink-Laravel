<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class DashboardController extends Controller
{
    public function __invoke(){
        $user = Auth::user()->load("links");
        return view('app.dashboard',compact("user"));
    }
}
