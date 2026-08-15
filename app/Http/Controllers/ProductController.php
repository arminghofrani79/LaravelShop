<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products', compact('products', 'categories'));
    }


    public function show($product)
    {
        // Fetch the product from the database using the provided product ID
        $product = Product::findOrFail($product);

        //relative products
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();
        // Return the product view with the product data
        return view('product', compact('product', 'relatedProducts'));
    }
}
