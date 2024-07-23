<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriVideo extends Model
{
    protected $table = 'galeri_video';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'judul',
        'tanggal',
        'youtubeid',
        'penjelasan'
    ];
}
