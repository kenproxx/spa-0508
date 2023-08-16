<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CauHinhController extends Controller
{
    public function showConfig_bannerTop()
    {
        return view('backend.pages.cau_hinh.banner_top');
    }
    public function showConfig_apiVnPay()
    {
        return view('backend.pages.cau_hinh.api_vn_pay');
    }
    public function showConfig_apiZalo()
    {
        return view('backend.pages.cau_hinh.api_zalo');
    }
    public function showConfig_footer()
    {
        return view('backend.pages.cau_hinh.footer');
    }
    public function showConfig_logo()
    {
        return view('backend.pages.cau_hinh.logo');
    }
    public function showConfig_menu()
    {
        return view('backend.pages.cau_hinh.menu');
    }
    public function showConfig_smtpEmail()
    {
        return view('backend.pages.cau_hinh.smtp_email');
    }
    public function showConfig_tieuDe()
    {
        return view('backend.pages.cau_hinh.tieu_de');
    }

    public function saveOrUpdateConfig(Request $request)
    {
        $type = $request->input('type');
        $user_id = Auth::user()->id;

        foreach ($request->except(['_token', 'type']) as $key => $value) {
            if ($value) {
                $isExitsKey = Config::where([['name', '=', $key], ['type', '=', $type]])->first();
                if ($isExitsKey) {
                    $isExitsKey->value = $value;
                    $isExitsKey->updated_by = $user_id;

                    $isExitsKey->save();
                } else {
                    $config = new Config();
                    $config->name = $key;
                    $config->value = $value;
                    $config->type = $type;
                    $config->created_by = $user_id;

                    $config->save();
                }
            }
        }

        return redirect()->back()->with('success', 'Sửa thành công');
    }
}
