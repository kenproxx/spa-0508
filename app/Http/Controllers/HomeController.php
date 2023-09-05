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

    // int là số lượng kí tự trong chuỗi muốn lấy ra
    public function generateRandomString($int){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $int; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
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

    public function replaceString($search, $replace, $value)
    {
        $string = str_replace($search, $replace, $value);
        return $string;
    }
}
