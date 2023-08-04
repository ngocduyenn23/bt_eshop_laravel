<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homecontroller::class, "index"])->name("index");
Route::get('/contact', [Homecontroller::class, "contact"]);
Route::get('/detail', [Homecontroller::class, "detail"]);


Route::prefix("/admin")->name("admin.")->middleware('auth')->group(function () {  
    Route::prefix("/danh_muc")->name("danhmuc.")->group(function () {
        Route::get('/', [DanhMucController::class, "index"])->name("index");
        route::get('/ten_danh_muc', [DanhMucController::class, "create"])->name("create");
        Route::get('/{id}/sua-danh-muc', [DanhMucController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [DanhMucController::class, "upsert"])->name("upsert"); 
        Route::post('/xoa/{id}', [DanhMucController::class, "destroy"])->name("destroy");
    });
    Route::prefix("/san_pham")->middleware('auth')->name("sanpham.")->group(function () {
        route::get('/', [SanPhamController::class, "index"])->name("index");
        route::get('/them_san_pham', [SanPhamController::class, "create"])->name("create");
        Route::post('/luu/{id?}', [SanPhamController::class, "upsert"])->name("upsert");
        Route::get('/{id}/sua-danh-muc', [SanPhamController::class, "edit"])->name("edit");
        Route::post('/xoa/{id}', [SanPhamController::class, "destroy"])->name("destroy");
       

        
    });
});
Route::get("/dang_ky", [AccountController::class, "register"])->name("account.register");
Route::post("/dang_ky", [AccountController::class, "save"])->name("account.save");
Route::get("/dang_nhap", [AccountController::class, "login"])->name("account.login");
Route::post("/dang_nhap", [AccountController::class, "auth"])->name("account.auth");
Route::get("/dang_xuat", [AccountController::class, "logout"])->name("account.logout");

