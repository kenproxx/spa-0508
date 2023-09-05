<?php

namespace App\Http\Controllers\frontend;

use App\Enum\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonHangController extends Controller
{
    public function create(Request $request)
    {
        try {
            $order = new Order();
            $order->ma_don_hang = $request->input('ma_don_hang');
            $order->tieu_de = $request->input('tieu_de');
            $order->price = $request->input('price');
            $order->id_nguoi_dat = $request->input('id_nguoi_dat');
            $order->id_chu_spa = $request->input('id_chu_spa');
            $order->ngay_dat = $request->input('ngay_dat');
            $order->ngay_su_dung = $request->input('ngay_su_dung');
            $order->kakao_id = $request->input('kakao_id');
            $order->email = $request->input('email');
            $order->number_phone = $request->input('number_phone');
            $order->visa = $request->input('visa');
            $order->more_service = $request->input('more_service');
            $order->created_by = Auth::user()->id;
            $order->status = OrderStatus::PROCESSING;
            $success = $order->save();
            if ($success) {
                return back();
            }
            return back();
        } catch (\Exception $exception) {
            return back();
        }
    }
}
