<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.dashboard_coba.product.index', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('backend.dashboard_coba.product.create',[
            'categories' => Category::all()
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100|unique:products',
            'description_product' => 'required|string',
            'category_id' => 'required',
            'voucer_id',
            'suhu' => 'required|string|max:100',
            'ukuran' => 'required|string|max:100',
            'gula' => 'required|string|max:100',
            'es' => 'required|string|max:100',
            'price' => 'required|integer',
            // 'promo' => 'integer',
            'image' => 'required|image|file|mimes:jpeg,png,jpg',
            'detail_image' => 'required|image|file|mimes:jpeg,png,jpg'
        ]);

        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('product-images');
        }
        if($request->file('detail_image')){
            $validatedData['detail_image']= $request->file('detail_image')->store('product-images-detail');
        }
        Product::create($validatedData);

        return redirect('/administrator/product')->with('success', 'Produk baru berhasil ditambahkan');
    }

    public function show($id)
    {
        $active = 'Produk';
        $product = Product::find($id);
        $categories = Category::orderBy('name', 'ASC')->get();


        return view('admin.produk.show', compact('active', 'product', 'categories'));
    }

    public function edit(Product $product)
    {
        return view('backend.dashboard_coba.product.edit',[
            'product' => $product,
            'categories' => Category::all()
        ]);
    }
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|string|max:100|unique:products',
            'description_product' => 'required|string',
            'category_id' => 'required|integer',
            'voucer_id',
            'suhu' => 'required|string|max:100',
            'ukuran' => 'required|string|max:100',
            'gula' => 'required|string|max:100',
            'es' => 'required|string|max:100',
            'price' => 'required|integer',
            'promo' => 'integer',
            'image' => 'required|image|file|mimes:jpeg,png,jpg'
        ];


        $validatedData =$request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->store('product-images');
        }

        Product::where('id', $product->id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Produk berhasil di update');

    }

    public function destroy(Product $product)
    {
        if($product->image){
            Storage::delete($product->image);
        }
        Product::destroy($product->id);

        return redirect('/dashboard/product')->with('success', ' Your post has been deleted!');
    }
}
