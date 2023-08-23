<?php

namespace App\Http\Controllers\backend;

use App\Enum\ProductServiceStatus;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoiDichVuController extends Controller
{
    public function index()
    {
        $productServices = ProductService::where('status', '!=', ProductServiceStatus::DELETED)->get();
        return view('backend/pages/goi_dich_vu/index', compact('productServices'));
    }

    public function create()
    {
        $products = Product::all();
        return view('backend/pages/goi_dich_vu/create', compact('products'));
    }

    public function store(Request $request)
    {
        try {
            $productService = new ProductService();
            foreach ($request->except(['_token']) as $key => $value) {
                $productService->{$key} = $value;
            }
            $productService->created_by = Auth::user()->id;
            $productService->status = ProductServiceStatus::ACTIVE;
            $success = $productService->save();
            return redirect(route('backend.goi-dich-vu.show'));
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function detail($id){
        $productService = ProductService::where([
            ['status', '!=', ProductServiceStatus::DELETED],
            ['id', $id]
        ])->first();
        return view('backend.pages.goi_dich_vu.detail', compact('productService'));
    }
}
