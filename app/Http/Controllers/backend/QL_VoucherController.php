<?php

namespace App\Http\Controllers\backend;

use App\Enum\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QL_VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $listProduct = Product::query();

        if ($user->role_id == UserRole::ADMIN) {
            $listProduct->where('user_id', $user->id);
        }

        $listProduct = $listProduct->get(['id', 'title', 'agency_id']);

        return view('backend/pages/voucher/index', compact('listProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $currentDate = now();
        $existingVoucher = Voucher::where([
            ['code', '=', $request->input('code')],
            ['end_time', '>', $currentDate]
        ])->first();

        if ($existingVoucher) {
            return redirect()->back()->with('error', 'Mã voucher đã tồn tại trong hệ thống');
        }
        $voucher = new Voucher();

        foreach ($request->except(['_token', 'service_id']) as $key => $value) {
            $voucher->{$key} = $value;
        }
        $voucher->created_by = Auth::user()->id;

        $voucher->save();

        return redirect()->back()->with('success', 'Tạo voucher thành công');

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
