<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('frontend.register.register',[
            'title' => 'Register',
            'active' => 'register'
        ]);

    }

    public function store(Request $request){

       $validatedData = $request->validate([
        'name'      => 'required|string|min:3|max:255|regex:/^[\pL\s\-]+$/u',
        'email'     => 'required|email|max:255|unique:users',
        'password'  => 'required|min:8|max:255',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);
        return redirect('/login')->with('success','Registrasi Berhasil!!');
    }
}
