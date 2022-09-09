<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Promo;
use App\Models\Topping;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = Product::all();
        // $coffe = Promo::where('kategori_produk',1) ->get();
        $coffe = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',1)->get();
        $tea = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',2)->get();
        $choco = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',3)->get();
        $refresher = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',4)->get();

        // $tea = Promo::where('kategori_produk', 2) ->get();
        // $choco =  Promo::where('kategori_produk',3) ->get();
        // $refresher = Promo::where('kategori_produk',4) ->get();

        return view('frontend.menu.menu', compact('promo', 'coffe','tea','choco','refresher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id)
    {
        // $menu = Produk::findOrFail($id->id);
        // $produk = Promo::where('produk_id', $menu->id)->get();
        // $menu = Produk::findOrFail($id->id)->where($id, DB::table('promos')->produk_id)->get();
        // $menu = Produk::where($id, DB::promo)
        $menu = Product::all()
                ->where('id',$id->id)
                ->first();
        $suhu = explode(',', $menu->suhu);
        $ukuran = explode(',', $menu->ukuran);
        $gula = explode(',', $menu->gula);
        $es = explode(',', $menu->es);
        $topping = Topping::all();
        // dd($menu);
        return view('frontend.menu.detail_menu', compact('menu','suhu','ukuran','gula','es','topping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function checkout($id)
    {
        $menu = Product::findOrFail($id);
        return view('frontend.menu.checkout', compact('menu'));
    }

    public function payment($id){
        $menu = Product::findOrFail($id);
        return view('frontend.menu.payment', compact('menu'));
    }

    public function flashsale(){
        $promo = Product::all();
        $coffe = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',1)->get();
        $tea = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',2)->get();
        $choco = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',3)->get();
        $refresher = Product::rightjoin('categories','categories.id', '=','products.category_id')->where('categories.id',4)->get();

        return view('frontend.beranda.flashsale', compact('promo', 'coffe','tea','choco','refresher'));
    }
}
