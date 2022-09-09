<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index(){
        return view('frontend.voucher.voucher');
    }

    public function detail(){
        return view('frontend.voucher.detail_voucher');
    }
}
