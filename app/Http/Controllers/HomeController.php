<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $articles = Article::all();
        $categories = Category::all();
        return view('home', compact('products', 'articles', 'categories'));
    }
}
