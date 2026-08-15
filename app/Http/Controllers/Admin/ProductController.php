<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/product/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6|max:30',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'stock' => 'required',
            'description' => 'required|min:10|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
            'is_featured' => 'nullable',
            'category_id' => 'required'
        ]);
        $filename = time() . '-' . $request->image->getClientOriginalName();
        $request->image->storeAs('images/products', $filename, 'public');
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $filename,
            'status' => $request->status,
            'is_featured' => $request->is_featured ?? 0,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('adminproducts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin/product/edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:6|max:30',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'stock' => 'required',
            'description' => 'required|min:10|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // تغییر به nullable
            'status' => 'required',
            'is_featured' => 'nullable',
            'category_id' => 'required'
        ]);
        $filename = $product->image;

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->image->getClientOriginalName();

            $request->image->storeAs(
                'images/products',
                $filename,
                'public'
            );
        }
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $filename,
            'status' => $request->status,
            'is_featured' => $request->is_featured ?? 0,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('adminproducts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('adminproducts');
    }
}
