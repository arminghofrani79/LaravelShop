<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //filters
        $products = Product::query()

            ->when($request->filled('search'), function ($query) use ($request) {
                $query->whereLike('name', '%' . $request->search . '%');
            })

            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })

            ->when($request->filled('min_price'), function ($query) use ($request) {
                $query->where('price', '>=', $request->min_price);
            })

            ->when($request->filled('max_price'), function ($query) use ($request) {
                $query->where('price', '<=', $request->max_price);
            })
            ->when($request->boolean('in_stock'), function ($query) {
                $query->where('in_stock', '>', 0);
            })
            ->when($request->boolean('discounted'), function ($query) {
                $query->where('discount', '>', 0);
            })

            ->paginate(6)
            ->withQueryString();


        $categories = Category::all();
        return view('products', compact('products', 'categories'));
    }


    public function show(Product $product)
    {
        //relative products
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();
        // Return the product view with the product data
        return view('product', compact('product', 'relatedProducts'));
    }
}
