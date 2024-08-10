<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class PageController extends Controller
{
    public function beranda(){
        $berita = DB::table('berita')->orderBy('tanggal', 'desc')->take(4)->get();
        return view('sections.beranda', ['berita' => $berita]);
    }

    public function visi(){
        return view('profil.visi');
    }

    public function sejarah(){
        return view('profil.sejarah');
    }

    public function demografis(){
        $penduduk = DB::table('jenis_kelamin')->get();
        $pendidikan = DB::table('tingkat_pendidikan')->get();
        $pekerjaan = DB::table('jenis_pekerjaan')->get();
        $natalitas = DB::table('kelahiran_kematian')->get();
        return view('profil.demografis',
            [
                'penduduk' => $penduduk,
                'pendidikan' => $pendidikan,
                'pekerjaan' => $pekerjaan,
                'natalitas' => $natalitas
            ]
        );
    }

    public function geografis(){
        $lahan = DB::table('penggunaan_lahan')->get();
        $fasil_kesehatan = DB::table('fasilitas_kesehatan')->get();
        $fasil_pendidikan = DB::table('fasilitas_pendidikan')->get();
        return view('profil.geografis',[
            'lahan' => $lahan,
            'fasil_kesehatan' => $fasil_kesehatan,
            'fasil_pendidikan' => $fasil_pendidikan
        ]);
    }

    public function struktur(){
        return view('pemerintahan.struktur');
    }

    public function perangkat(){

        $perangkat = DB::table('profil_struktur')->get();

        return view('pemerintahan.perangkat', ['perangkat' => $perangkat]);
    }

    public function lembaga(){

        $lembaga = DB::table('lembaga_desa')->get();

        return view('pemerintahan.lembaga', ['lembaga' => $lembaga]);
    }

    public function sda(){

        $pertanian = DB::table('sumber_pertanian')->get();
        $peternakan = DB::table('sumber_peternakan')->get();
        return view('potensi.sda', [
            'pertanian' => $pertanian,
            'peternakan' => $peternakan
        ]);
    }

    public function produk(){
        return view('potensi.produk');
    }

    public function wisata(){
        return view('potensi.wisata');
    }

    public function berita(){

        $berita = DB::table('berita')->orderBy('tanggal', 'desc')->paginate(12);

        return view('informasi.berita', ['berita' => $berita]);
    }

    public function galeri(){

        $foto = DB::table('galeri')->orderBy('tanggal', 'desc')->paginate(
            8, ['*'], 'foto'
        );
        $video = DB::table('galeri_video')->orderBy('tanggal', 'desc')->paginate(
            3, ['*'], 'video'
        );

        return view('informasi.galeri', ['foto' => $foto, 'video' => $video]);
    }

    public function login(){
        return view('sections.login');
    }
}
