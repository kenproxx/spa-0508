<?php

use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('/san-pham')->group(function () {
    Route::get('', [HomePageController::class, 'index'])->name('frontend.san-pham.show');
    Route::get('/id/{id}', [ProductController::class, 'getProductByID'])->name('frontend.san-pham.id');
    Route::get('/thuoc-tinh/{thuoc_tinh}', [ProductController::class, 'getListSanPhamHot'])->name('frontend.san-pham.thuoc-tinh');

});







