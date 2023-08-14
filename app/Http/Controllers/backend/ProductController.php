<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Product;
use App\Models\ProductMoreservices;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProduct = Product::get(['id','title','created_at',
            'avatar','gia_goc','gia_khuyen_mai', 'status']);
        return view('backend/pages/quan_ly_san_pham/index',
            compact('listProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listSpa = Agency::where('status', 1)->get(['id', 'ten_quan_ly', 'ten_co_so', 'user_id']);
        return view('backend/pages/quan_ly_san_pham/create', compact('listSpa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        foreach ($request->except(['_token', 'service_id']) as $key => $value) {
            $product->{$key} = $value;
        }
        $product->created_by = Auth::user()->id;
        $product->save();

        $product_service = new ProductMoreservices();

        $product_service->product_id = $product->id;
        $product_service->agency_id = $product->agency_id;
        $product_service->user_id = 1;
        $product_service->service_id = implode(',', $request->service_id);

        $product_service->save();
        dd($product_service);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
