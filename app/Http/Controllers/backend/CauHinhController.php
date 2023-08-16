<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function saveConfig_bannerTop()
    {
        return view('backend.pages.cau_hinh.banner_top');
    }
    public function saveConfig_apiVnPay()
    {
        return view('backend.pages.cau_hinh.api_vn_pay');
    }
    public function saveConfig_apiZalo()
    {
        return view('backend.pages.cau_hinh.api_zalo');
    }
    public function saveConfig_footer()
    {
        return view('backend.pages.cau_hinh.footer');
    }
    public function saveConfig_logo()
    {
        return view('backend.pages.cau_hinh.logo');
    }
    public function saveConfig_menu()
    {
        return view('backend.pages.cau_hinh.menu');
    }
    public function saveConfig_smtpEmail()
    {
        return view('backend.pages.cau_hinh.smtp_email');
    }
    public function saveConfig_tieuDe()
    {
        return view('backend.pages.cau_hinh.tieu_de');
    }
}
