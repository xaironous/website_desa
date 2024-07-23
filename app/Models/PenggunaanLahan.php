<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaanLahan extends Model
{
    protected $table = 'penggunaan_lahan';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'nama',
        'jumlah',
    ];
}
