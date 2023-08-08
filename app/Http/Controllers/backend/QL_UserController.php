<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Prologue\Alerts\Facades\Alert;
use function Laravel\Prompts\alert;

class QL_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listRole = Role::all(['id', 'name']);
        $listUser = User::all(['id', 'name', 'number_phone', 'email', 'kakao_talk_id', 'role_id']);
        return view('backend/pages/quan_ly_user/index', compact('listRole', 'listUser'));
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
        $existingUser = User::where('email', $request->input('email'))->first();

        if ($existingUser) {
            return redirect()->back()->with('error', 'Địa chỉ email đã tồn tại.');
        }

        $user = new User();
        $arrInput = $request->input();
        foreach (array_keys($request->input()) as $key) {
            if ($key != '_token') {
                $user->{$key} = $arrInput[$key];
            }
            if ($key == 'password') {
                $user->{$key} = Hash::make($arrInput[$key]);
            }
        }
        $result = $user->save();
        if ($result) {
            return redirect()->route('backend.user.show');
        }
        return redirect()->back();
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
