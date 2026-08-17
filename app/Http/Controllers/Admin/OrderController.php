<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')
            ->latest()
            ->paginate(10);

        $allOrdersCount = Order::count();
        $pendingOrdersCount = Order::where('status', 'pending')->count();
        $completedOrdersCount = Order::where('status', 'completed')->count();
        $cancledOrdersCount = Order::where('status', 'cancelled')->count();

        return view('admin.order.index', compact(
            'orders',
            'allOrdersCount',
            'pendingOrdersCount',
            'completedOrdersCount',
            'cancledOrdersCount'
        ));
    }



    public function show(Order $order)
    {
        $order->load([
            'user',
            'address',
            'orderItems.product'
        ]);
        return view('admin.order.watch', compact('order'));
    }



    public function updateStatus(Request $request, Order $order)
    {
        $data = $request->validate([
            'status' => 'required|in:pending,processing,shipped,completed,cancelled',
        ]);

        $order->update([
            'status' => $data['status'],
        ]);

        return back()->with('success', 'وضعیت سفارش با موفقیت بروزرسانی شد.');
    }
}
