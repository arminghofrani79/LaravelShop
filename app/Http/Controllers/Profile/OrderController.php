<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = $request->user()->orders()->latest()->paginate(10);

        $allOrdersCount = $request->user()->orders()->count();
        $deliveredOrdersCount = $request->user()->orders()->where('status', 'completed')->count();
        $canceledOrdersCount = $request->user()->orders()->where('status', 'cancelled')->count();
        $pendingOrdersCount = $request->user()->orders()->where('status', 'pending')->count();

        return view('user.order.order', compact('orders', 'allOrdersCount', 'deliveredOrdersCount', 'canceledOrdersCount', 'pendingOrdersCount'));
    }

    public function show(Request $request, Order $order)
    {
        abort_unless($order->user_id === $request->user()->id, 403);

        $order->load([
            'address',
            'orderItems.product'
        ]);

        return view('user.order.order-watch', compact('order'));
    }
}
