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
use App\Http\Controllers\frontend\HomePageController;
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


Route::group(['prefix' => 'backend', 'middleware' => 'role.admin.super_admin'], function () {
    Route::get('/', [HomePageController::class, 'index'])->name('index');
    require_once __DIR__ . '/backend.php';
});

Route::group(['prefix' => 'frontend'], function () {
    require_once __DIR__ . '/frontend.php';
});






