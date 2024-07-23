<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumberPeternakan extends Model
{
    protected $table = 'sumber_peternakan';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'jenis',
        'jumlah_ternak',
        'pemilik'
    ];
}
