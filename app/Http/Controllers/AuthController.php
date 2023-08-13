<?php

namespace App\Http\Controllers;

use App\Enum\UserRole;
use App\Enum\UserStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function showFormLogin()
    {
        return view('backend.pages.dang-nhap.index');
    }

    public function login(Request $request)
    {
        $emailLogin = $request->input('email');

            $credentials = [
                'email' => $emailLogin,
                'password' => $request->input('password'),
            ];

        $user = User::where('email' , $emailLogin)->first();


        if ($user) {
            if ($user->status !== UserStatus::ACTIVE) {
                return back()->with('error', 'Tài khoản của bạn đã bị khóa.');
            }
            if ($user->role_id == UserRole::GUEST) {

            }
        }

        if (Auth::attempt($credentials)) {
            $request->session()->put('login', $emailLogin);
            $login = $request->session()->get('login');
            return redirect()->route('backend.thong-ke.show');
        } else {
            return back()->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('login');

        return redirect(route('login'));
    }
}
