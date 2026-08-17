<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(4);
        $articles = Article::latest()->paginate(3);
        $categories = Category::inRandomOrder()->limit(4)->get();
        return view('home', compact('products', 'articles', 'categories'));
    }
}
