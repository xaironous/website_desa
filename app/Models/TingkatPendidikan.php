<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatPendidikan extends Model
{
    protected $table = 'tingkat_pendidikan';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'tingkat',
        'jumlah',
    ];
}
