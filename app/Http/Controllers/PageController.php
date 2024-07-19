<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda(){
        return view('sections.beranda');
    }

    public function visi(){
        return view('profil.visi');
    }

    public function sejarah(){
        return view('profil.sejarah');
    }

    public function demografis(){
        return view('profil.demografis');
    }

    public function geografis(){
        return view('profil.geografis');
    }

    public function struktur(){
        return view('pemerintahan.struktur');
    }

    public function perangkat(){
        return view('pemerintahan.perangkat');
    }

    public function lembaga(){
        return view('pemerintahan.lembaga');
    }

    public function sda(){
        return view('potensi.sda');
    }

    public function produk(){
        return view('potensi.produk');
    }

    public function wisata(){
        return view('potensi.wisata');
    }

    public function berita(){
        return view('informasi.berita');
    }

    public function galeri(){
        return view('informasi.galeri');
    }

    public function login(){
        return view('sections.login');
    }
}