<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topping;
use App\Models\Product;
use Illuminate\Http\Request;

class VoucerController extends Controller
{
    public function index()
    {

        return view('backend.dashboard_coba.voucer.index',[
        // 'categories' => Category::all()
        'products' => Product::all(),
        'toppings' => Topping::all()
    ]);

    }
    public function create()
    {
        return view('backend.dashboard_coba.category.create',[
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Category::create($validatedData);
        return redirect('/administrator/category')->with('success', ' Your Category has been added!');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit',[
            'categories' => $category,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:categories,name,'.$id,
        ]);

        $request->request->add([$request->name]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('success', 'Kategori telah berhasil diupdate');
    }

    public function destroy($id)
    {
        $category = Category::withCount('product')->find($id);

        if($category->product_count === 0) {
            $category->delete();
            return redirect()->back()->with('success', 'Kategori berhasil dihapus');
        }

        return redirect()->back()->with('error', 'Kategori sedang digunakan oleh produk lain');
    }
}
