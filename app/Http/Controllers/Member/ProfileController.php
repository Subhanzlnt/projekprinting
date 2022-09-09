<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('frontend.akun.profil');
        // ,[
        //     'users' => User::where('id', auth()->user()->id)->get()
        // ]);

    }
}
