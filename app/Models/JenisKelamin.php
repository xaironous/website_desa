<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    protected $table = 'jenis_kelamin';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'jenis',
        'jumlah',
    ];
}
