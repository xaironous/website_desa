<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DatabaseController;

Route::get('/', [PageController::class,'beranda']);
Route::get('/visi-misi', [PageController::class,'visi']);
Route::get('/sejarah-desa', [PageController::class,'sejarah']);
Route::get('/geografis-desa', [PageController::class,'geografis']);
Route::get('/demografis-desa', [PageController::class,'demografis']);

Route::get('/struktur-organisasi', [PageController::class,'struktur']);
Route::get('/perangkat-desa', [PageController::class,'perangkat']);
Route::get('/lembaga-desa', [PageController::class,'lembaga']);

Route::get('/sumber-daya-alam', [PageController::class,'sda']);
Route::get('/produk-unggulan', [PageController::class,'produk']);
Route::get('/wisata-desa', [PageController::class,'wisata']);

Route::get('/berita-dan-pengumuman/{id}', [DatabaseController::class,'info'])->name('informasi.info');
Route::get('/berita-dan-pengumuman', [PageController::class,'berita']);
Route::get('/galeri', [PageController::class,'galeri']);

Route::get('/login', [PageController::class,'login']);
