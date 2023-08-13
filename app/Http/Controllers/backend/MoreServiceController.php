<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\MoreService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MoreServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDaiLy = Agency::all();
        $listService = MoreService::get(['service_name', 'agencys_id']);
        return view('backend/pages/dich_vu_them/index', compact('listDaiLy', 'listService'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getAllByAgency($agency_id)
    {
        $listService = MoreService::where('agencys_id', $agency_id)->get(['id', 'service_name']);
        return response()->json($listService);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new MoreService();

        $arrInput = $request->input();
        foreach (array_keys($request->input()) as $key) {
            if ($key != '_token') {
                $service->{$key} = $arrInput[$key];
            }
        }

        $service->save();

        return redirect()->back()->with('success', 'Tạo dịch vụ thành công');

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
