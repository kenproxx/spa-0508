<?php

namespace App\Http\Controllers\backend;

use App\Enum\ProductServiceStatus;
use App\Http\Controllers\Controller;
use App\Models\ProductService;
use Illuminate\Http\Request;

class GoiDichVuController extends Controller
{
    public function index()
    {
        $productServices = ProductService::where('status', '!=', ProductServiceStatus::DELETED)->get();
    }
}
