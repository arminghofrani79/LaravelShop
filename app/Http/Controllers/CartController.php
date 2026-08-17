<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        $products = Product::whereIn('id', array_keys($cart))->get();

        $cartTotal = 0;

        foreach ($products as $product) {
            $quantity = $cart[$product->id]['quantity'];

            $cartTotal += $product->price * $quantity;
        }

        return view('cart', compact('cart', 'products', 'cartTotal'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer'
        ]);
        $cart = session()->get('cart', []);
        $productId = $data['product_id'];
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $data['quantity'];
        } else {
            $cart[$productId] = [
                'quantity' => $data['quantity'],
            ];
        };
        session()->put('cart', $cart);
        // dd($cart);
        return redirect()
            ->route('cart')
            ->with('success', 'محصول به سبد خرید اضافه شد.');
    }


    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] = $data['quantity'];

            session()->put('cart', $cart);
        }

        return back()->with('success', 'تعداد محصول بروزرسانی شد.');
    }


    public function destroy(Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);

            session()->put('cart', $cart);
        }

        return back()->with('success', 'محصول از سبد خرید حذف شد.');
    }
}
