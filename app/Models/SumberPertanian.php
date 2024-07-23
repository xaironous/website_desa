<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumberPertanian extends Model
{
    protected $table = 'sumber_pertanian';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'jenis',
        'luas_lahan',
        'hasil'
    ];
}
