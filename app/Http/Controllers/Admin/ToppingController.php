<?php

namespace App\Http\Controllers\Admin;

use App\Models\Topping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ToppingController extends Controller
{
    public function index()
    {

        return view('backend.dashboard_coba.topping.index',[
        'toppings' => Topping::all()
    ]);

    }
    public function create()
    {
        return view('backend.dashboard_coba.topping.create',[
            'topings' => Topping::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|file|mimes:jpeg,png,jpg|max:20048',
            'price' => 'required|integer',
        ]);

        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('topping-images');
        }
        Topping::create($validatedData);

        return redirect('/administrator/topping')->with('success', 'Topping baru berhasil ditambahkan');
    }

    public function edit(Topping $topping)
    {
        return view('admin.topping.edit',[
            'topings' => $topping,
            'topings' => Topping::all()
        ]);
    }

    public function update(Request $request, Topping $topping)
    {
        $rules = [
            'name' => 'required|string|max:100|unique:toppings',
            'image' => 'required|image|file|mimes:jpeg,png,jpg|max:20048',
            'price' => 'required|integer',
        ];

        $validatedData =$request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->store('topping-images');
        }

        Topping::where('id', $topping->id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Produk berhasil di update');
    }

    public function destroy(Topping $topping)
    {
        if($topping->image){
            Storage::delete($topping->image);
        }
        Topping::destroy($topping->id);

        return redirect('/dashboard/topping')->with('success', ' Your topping has been deleted!');
    }
}
