<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|email|unique:users|max:40',
            'password' => 'required|password'
        ]);
    }
}
