<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDaiLy = Agency::where('status', 1)->get(['id', 'ten_co_so', 'ten_quan_ly']);
        return view('backend/pages/dai_ly/index', compact('listDaiLy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/pages/dai_ly/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->input());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $agency = Agency::where('id', $id)->first();
            if ($agency) {
                return response()->json($agency);
            }
            return back()->with('error', 'Lỗi, thử lại');
        } catch (\Exception $exception) {

        }
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
