<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'beranda']);
Route::get('/visi-misi', [PageController::class,'visi']);
Route::get('/asal-usul-desa', [PageController::class,'asal']);
Route::get('/legenda-dan-cerita-rakyat', [PageController::class,'legenda']);
Route::get('/penduduk', [PageController::class,'penduduk']);
Route::get('/sejarah-desa', [PageController::class,'sejarah']);
Route::get('/topografi', [PageController::class,'topografi']);
Route::get('/lokasi', [PageController::class,'lokasi']);
Route::get('/struktur-organisasi', [PageController::class,'struktur']);
Route::get('/perangkat-desa', [PageController::class,'perangkat']);
Route::get('/lembaga-desa', [PageController::class,'lembaga']);
Route::get('/sumber-daya-alam', [PageController::class,'sda']);
Route::get('/produk-unggulan', [PageController::class,'produk']);
Route::get('/wisata-desa', [PageController::class,'wisata']);
Route::get('/berita-dan-pengumuman', [PageController::class,'berita']);
Route::get('/galeri', [PageController::class,'galeri']);