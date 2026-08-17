<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()
                ->route('cart')
                ->with('error', 'سبد خرید شما خالی است.');
        }

        $products = Product::whereIn('id', array_keys($cart))->get();

        $addresses = $request->user()
            ->addresses()
            ->latest()
            ->get();

        $cartTotal = 0;

        foreach ($products as $product) {
            $quantity = $cart[$product->id]['quantity'];

            $cartTotal += $product->price * $quantity;
        }

        return view(
            'user/checkout/index',
            compact('cart', 'products', 'addresses', 'cartTotal')
        );
    }


    //store important
    public function store(Request $request)
    {
        $data = $request->validate([
            'address_id' => 'required|integer',
        ]);
        $address = $request->user()
            ->addresses()
            ->findOrFail($data['address_id']);

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()
                ->route('cart')
                ->with('error', 'سبد خرید شما خالی است.');
        }

        $order = DB::transaction(function () use ($request, $address, $cart) {

            $totalPrice = 0;
            $discountAmount = 0;
            $products = [];

            foreach ($cart as $productId => $item) {

                $product = Product::findOrFail($productId);

                $quantity = $item['quantity'];

                if ($product->stock < $quantity) {
                    throw new \Exception(
                        'موجودی محصول ' . $product->name . ' کافی نیست.'
                    );
                }

                $itemTotal = $product->price * $quantity;

                $itemDiscount =
                    ($itemTotal * $product->discount) / 100;

                $totalPrice += $itemTotal;
                $discountAmount += $itemDiscount;

                $products[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'total' => $itemTotal,
                ];
            }

            $shippingCost = 0;

            $finalPrice =
                $totalPrice - $discountAmount + $shippingCost;

            $order = $request->user()
                ->orders()
                ->create([
                    'address_id' => $address->id,

                    'order_number' =>
                    'ORD-' . now()->format('YmdHis') . '-' . Str::upper(Str::random(4)),

                    'total_price' => $totalPrice,

                    'discount_amount' => $discountAmount,

                    'shipping_cost' => $shippingCost,

                    'final_price' => $finalPrice,

                    'payment_status' => 'pending',

                    'status' => 'pending',
                ]);

            foreach ($products as $item) {

                $product = $item['product'];

                $order->orderItems()->create([
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                    'total' => $item['total'],
                ]);

                $product->decrement(
                    'stock',
                    $item['quantity']
                );
            }

            return $order;
        });

        session()->forget('cart');

        return redirect()
            ->route('user-watch-order', $order)
            ->with('success', 'سفارش با موفقیت ثبت شد.');
    }
}
