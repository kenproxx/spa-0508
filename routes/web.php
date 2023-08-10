<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\MoreServiceController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\QL_UserController;
use App\Http\Controllers\backend\QL_VoucherController;
use App\Http\Controllers\backend\QLEmailController;
use App\Http\Controllers\backend\ThongKeController;
use App\Http\Controllers\backend\TinNhanController;
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



Route::prefix('/backend')->group(function () {
    Route::get('/dang-nhap', [BackendController::class, 'login'])->name('backend.dang-nhap.show');
    Route::get('/thong-ke', [ThongKeController::class, 'index'])->name('backend.thong-ke.show');
    Route::get('/tin-nhan', [TinNhanController::class, 'index'])->name('backend.tin-nhan.show');
    Route::get('/email', [QLEmailController::class, 'index'])->name('backend.email.show');
    Route::get('/nguoi-dung', [QL_UserController::class, 'index'])->name('backend.user.show');
    Route::get('/ma-giam-gia', [QL_VoucherController::class, 'index'])->name('backend.voucher.show');
    Route::get('/san-pham', [ProductController::class, 'index'])->name('backend.san-pham.show');
    Route::get('/dich-vu-them', [MoreServiceController::class, 'index'])->name('backend.dich-vu-them.show');
    Route::get('/trang-ca-nhan', [ProfileController::class, 'index'])->name('backend.trang-ca-nhan.show');
});
Route::prefix('/backend/nguoi-dung')->group(function () {
    Route::post('/store', [QL_UserController::class, 'store'])->name('backend.nguoi-dung.store');
});



Route::prefix('/frontend')->group(function () {
    Route::get('/thong-ke', [ThongKeController::class, 'index'])->name('backend.thong-ke.show');
});
