<?php

namespace App\Http\Controllers\backend;

use App\Enum\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    public function index()
    {
        $listOrder = Order::where('status', '!=', OrderStatus::DELETED)->get();
        return view('backend/pages/don_hang/index', compact('listOrder'));
    }

    public function show(string $id)
    {
        $order = Order::where('id', $id)->first();
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
