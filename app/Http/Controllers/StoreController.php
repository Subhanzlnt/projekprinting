<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        return view('frontend.store.store');
    }

    public function detail(){
        return view( 'frontend.store.detail');
    }
}
