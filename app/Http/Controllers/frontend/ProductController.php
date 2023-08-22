<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ResponseCustom;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Mockery\Exception;

class ProductController extends Controller
{
    public function getProductByID($id)
    {
        $response = new Response();
        try {

            $product = Product::where('id', $id)->get();
            if (!$product) {
                $msg = 'Không tìm thấy';
                $response->setContent($msg);
                return response()->json($response);
            }
            $response->setContent($product);
            return response()->json($response);
        } catch (Exception $exception) {

            $response->setContent($exception);
            return response()->json($response);
        }
    }
}
