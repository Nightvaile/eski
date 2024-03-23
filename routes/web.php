<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//UserSide
Route::group(['middleware'=>'categoryMw'], function () {
    Route::get('/', [HomePageController::class, 'homepage'])->name('homepage');

    Route::get('/kayit-ol', [PageController::class, 'signin'])->name('kayit_ol');
    Route::get('/giris-yap', [PageController::class, 'login'])->name('giris_yap');

    Route::prefix('/kategoriler/{kategori?}')->get('/{altKategori?}/{alt0?}/{alt1?}/{alt2?}/{alt3?}/{alt4?}/{alt5?}/{alt6?}/{alt7?}/{alt8?}/{alt9?}',[PageController::class,'shop'],)->name('kategori_goster');

    Auth::routes();

    Route::get('/hakkimizda',[PageController::class,'aboutus'])->name('hakkimizda');

    Route::get('/iletisim',[PageController::class,'contactus'])->name('iletisim');
    Route::post('/iletisim-ilet',[AjaxController::class,'contactus_send'])->name('iletisim_ilet');
    Route::get('/urun/{slug}/{id}',[PageController::class,'product_preview'])->name('product_preview');

});

//AdminSide

Route::get('/admin', [AdminPageController::class, 'adminhomepage'])->name('admin_home_page');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
