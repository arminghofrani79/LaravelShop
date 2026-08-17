<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $lessProducts = Product::where('stock', '<=', 2)->get();
        $articles = Article::latest()->paginate('3');
        $orders = Order::with('user')
            ->latest()
            ->paginate('5');
        return view('admin/index', compact('orders', 'lessProducts', 'articles'));
    }
}
