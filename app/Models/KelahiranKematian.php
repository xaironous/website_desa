<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelahiranKematian extends Model
{
    protected $table = 'kelahiran_kematian';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'tahun',
        'kelahiran',
        'kematian'
    ];
}
