<?php

namespace App\Http\Controllers;

use App\Enum\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend/pages/index');
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
        //
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

    public function sendMail()
    {
        (new SendMailController())->sendEmail('ngodaix5tp@gmail.com', 'abc123@gmail.com', 'Alooo', 'Hello World');
    }


    public function checkAdminRole()
    {
        $isAdmin = false;
        $userRole = Auth::user()->role_id;
        if ($userRole == UserRole::ADMIN || $userRole == UserRole::SUPER_ADMIN) {
            $isAdmin = true;
        }
        return $isAdmin;
    }

    public function checkGuestRole()
    {
        $isGuest = false;
        $userRole = Auth::user()->role_id;
        if ($userRole == UserRole::GUEST) {
            $isGuest = true;
        }
        return $isGuest;
    }

}
