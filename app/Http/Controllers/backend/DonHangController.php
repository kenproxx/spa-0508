<?php

namespace App\Http\Controllers\backend;

use App\Enum\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonHangController extends Controller
{
    public function index()
    {
        $listOrder = Order::where('status', '!=', OrderStatus::DELETED)->orderBy('id', 'desc')->get();
        return view('backend/pages/don_hang/index', compact('listOrder'));
    }

    public function show(string $id)
    {
        $order = Order::where('id', $id)->first();
        if (!$order) {
            return back();
        }
        return view('backend/pages/don_hang/detail', compact('order'));
    }


    public function update(Request $request, string $id)
    {
        $order = Order::where('id', $id)->first();
        if (!$order) {
            return back();
        }
        $order->status = $request->input('status');
        $order->updated_by = Auth::user()->id;
        $order->save();
        return redirect(route('backend.don-hang.show'));
    }

    public function destroy(string $id)
    {
        $order = Order::where('id', $id)->first();
        if (!$order) {
            return back();
        }
        $order->status = OrderStatus::DELETED;
        $order->save();
        return redirect(route('backend.don-hang.show'));
    }
}
