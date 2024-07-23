<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPekerjaan extends Model
{
    protected $table = 'jenis_pekerjaan';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'pekerjaan',
        'jumlah',
    ];
}
