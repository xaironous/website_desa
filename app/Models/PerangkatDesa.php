<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    protected $table = 'profil_struktur';

    public $timestamps = false;
    
    use HasFactory; 
    protected $fillable = [
        'id',
        'nama',
        'jabatan',
        'foto_profil',
    ];
}
