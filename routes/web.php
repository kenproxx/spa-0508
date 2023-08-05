<?php

use App\Http\Controllers\backend\ThongKeController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('backend.home.show');

Route::prefix('/backend')->group(function () {
    Route::get('/thong-ke', [ThongKeController::class, 'index'])->name('backend.thong-ke.show');
});

Route::prefix('/frontend')->group(function () {
    Route::get('/thong-ke', [ThongKeController::class, 'index'])->name('backend.thong-ke.show');
});
