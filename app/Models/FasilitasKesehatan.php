<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKesehatan extends Model
{
    protected $table = 'fasilitas_kesehatan';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'nama',
        'jumlah',
    ];
}
