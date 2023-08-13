<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\AgencyController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\DonHangController;
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
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('sign-in');
Route::get('/logout', [AuthController::class, 'logout'])->name('log-out');


Route::middleware(['role.admin.super_admin'])->group(function () {

    Route::prefix('/backend')->group(function () {
        Route::get('/dai-ly', [AgencyController::class, 'index'])->name('backend.dai-ly.show');
        Route::get('/thong-ke', [ThongKeController::class, 'index'])->name('backend.thong-ke.show');
        Route::get('/tin-nhan', [TinNhanController::class, 'index'])->name('backend.tin-nhan.show');
        Route::get('/email', [QLEmailController::class, 'index'])->name('backend.email.show');
        Route::get('/nguoi-dung', [QL_UserController::class, 'index'])->name('backend.user.show');
        Route::get('/ma-giam-gia', [QL_VoucherController::class, 'index'])->name('backend.voucher.show');
        Route::get('/san-pham', [ProductController::class, 'index'])->name('backend.san-pham.show');
        Route::get('/dich-vu-them', [MoreServiceController::class, 'index'])->name('backend.dich-vu-them.show');
        Route::get('/trang-ca-nhan', [ProfileController::class, 'index'])->name('backend.trang-ca-nhan.show');
        Route::get('/don-hang', [DonHangController::class, 'index'])->name('backend.don-hang.show');
    });

    Route::prefix('/backend/nguoi-dung')->group(function () {
        Route::post('/store', [QL_UserController::class, 'store'])->name('backend.nguoi-dung.store');
        Route::get('/show/{id}', [QL_UserController::class, 'show'])->name('backend.nguoi-dung.show');
        Route::post('/update/{id}', [QL_UserController::class, 'update'])->name('backend.nguoi-dung.update');

    });

    Route::prefix('/backend/san-pham')->group(function () {
        Route::get('/create', [ProductController::class, 'create'])->name('backend.san-pham.create');
        Route::post('/store', [ProductController::class, 'store'])->name('backend.san-pham.store');
    });

    Route::prefix('/backend/dich-vu-them')->group(function () {
        Route::post('/store', [MoreServiceController::class, 'store'])->name('backend.dich-vu-them.store');
        Route::get('/get-by-agency/{id}', [MoreServiceController::class, 'getAllByAgency'])->name('backend.dich-vu-them.get-by-agency');

    });
});


