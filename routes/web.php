<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\AgencyController;
use App\Http\Controllers\backend\CauHinhController;
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

        Route::prefix('/nguoi-dung')->group(function () {
            Route::get('', [QL_UserController::class, 'index'])->name('backend.user.show');
            Route::post('/store', [QL_UserController::class, 'store'])->name('backend.nguoi-dung.store');
            Route::get('/show/{id}', [QL_UserController::class, 'show'])->name('backend.nguoi-dung.show');
            Route::post('/update/{id}', [QL_UserController::class, 'update'])->name('backend.nguoi-dung.update');
            Route::get('/destroy/{id}', [QL_UserController::class, 'destroy'])->name('backend.nguoi-dung.destroy');
        });

        Route::prefix('/dai-ly')->group(function () {
            Route::get('', [AgencyController::class, 'index'])->name('backend.dai-ly.show');
        });

        Route::prefix('/thong-ke')->group(function () {
            Route::get('', [ThongKeController::class, 'index'])->name('backend.thong-ke.show');
        });

        Route::prefix('/tin-nhan')->group(function () {
            Route::get('', [TinNhanController::class, 'index'])->name('backend.tin-nhan.show');
        });

        Route::prefix('/email')->group(function () {
            Route::get('', [QLEmailController::class, 'index'])->name('backend.email.show');
        });

        Route::prefix('/ma-giam-gia')->group(function () {
            Route::get('', [QL_VoucherController::class, 'index'])->name('backend.voucher.show');
            Route::post('/store', [QL_VoucherController::class, 'store'])->name('backend.voucher.store');
            Route::delete('/destroy/{id}', [QL_VoucherController::class, 'destroy'])->name('backend.voucher.destroy');
        });

        Route::prefix('/san-pham')->group(function () {
            Route::get('', [ProductController::class, 'index'])->name('backend.san-pham.show');
            Route::get('/create', [ProductController::class, 'create'])->name('backend.san-pham.create');
            Route::post('/store', [ProductController::class, 'store'])->name('backend.san-pham.store');
        });

        Route::prefix('/dich-vu-them')->group(function () {
            Route::get('', [MoreServiceController::class, 'index'])->name('backend.dich-vu-them.show');
            Route::post('/store', [MoreServiceController::class, 'store'])->name('backend.dich-vu-them.store');
            Route::get('/get-by-agency/{id}', [MoreServiceController::class, 'getAllByAgency'])->name('backend.dich-vu-them.get-by-agency');
        });

        Route::prefix('/trang-ca-nhan')->group(function () {
            Route::get('', [ProfileController::class, 'index'])->name('backend.trang-ca-nhan.show');
        });

        Route::prefix('/don-hang')->group(function () {
            Route::get('', [DonHangController::class, 'index'])->name('backend.don-hang.show');
        });

        Route::prefix('/cau-hinh')->group(function () {

            Route::prefix('/vn-pay')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_apiVnPay'])->name('backend.cau-hinh.show.vn-pay');
            });

            Route::prefix('/zalo')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_apiZalo'])->name('backend.cau-hinh.show.zalo');
            });

            Route::prefix('/banner')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_bannerTop'])->name('backend.cau-hinh.show.banner');
            });

            Route::prefix('/footer')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_footer'])->name('backend.cau-hinh.show.footer');
            });

            Route::prefix('/logo')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_logo'])->name('backend.cau-hinh.show.logo');
            });

            Route::prefix('/menu')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_menu'])->name('backend.cau-hinh.show.menu');
            });

            Route::prefix('/email')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_smtpEmail'])->name('backend.cau-hinh.show.email');
            });

            Route::prefix('/tieu-de')->group(function () {
                Route::get('', [CauHinhController::class, 'showConfig_tieuDe'])->name('backend.cau-hinh.show.tieu-de');
            });

            Route::post('', [CauHinhController::class, 'saveOrUpdateConfig'])->name('backend.cau-hinh.store');

        });
    });
});


