<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductFeedback;
use App\Models\ProductService;
use App\Models\Revenue;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $products = Product::where('status', 1)->get();
        $orders = Order::all();
        $services = ProductService::all();
        $feedbacks = ProductFeedback::all();
        $roleSpa = Role::where('name', 'ADMIN')->first();
        $spas = User::where('role_id', $roleSpa->id)->get();
        return view('backend/pages/thong-ke/index', compact(
            'users',
            'spas',
            'products',
            'orders',
            'services', 'feedbacks'));
    }

    public function getAllRevenueOrder()
    {
        $orders = Order::where('created_at', '>', Carbon::now()->addMonths(-1))->orderBy('created_at', 'desc')->get();
        $numbers = null;
        $datetime = null;
        foreach ($orders as $item) {
            $numbers[] = $item->price;
            $datetime[] = $item->created_at ;
        }
        $myArray[] = [$numbers, $datetime];
        return $myArray;
    }
}
