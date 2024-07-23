<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'judul',
        'tanggal',
        'foto_berita',
        'isi_berita'
    ];
}
