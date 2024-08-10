<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'tanggal',
        'foto_galeri',
    ];
}
