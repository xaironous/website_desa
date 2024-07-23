<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasPendidikan extends Model
{
    protected $table = 'fasilitas_pendidikan';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'nama',
        'jumlah',
    ];
}
