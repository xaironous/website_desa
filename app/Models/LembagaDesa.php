<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembagaDesa extends Model
{
    protected $table = 'lembaga_desa';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'nama',
        'singkatan',
        'alamat',
    ];
}
