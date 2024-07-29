<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function info($id){
        $berita = Berita::findOrFail($id);
        return view('informasi.info', compact('berita'));
    }
}
