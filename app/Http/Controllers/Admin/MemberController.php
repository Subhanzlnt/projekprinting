<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        return view('backend.dashboard_coba.member.index',[
            'members' => User::all()->where('is_admin', false)
        ]);
    }

}
