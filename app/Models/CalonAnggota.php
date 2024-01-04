<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonAnggota extends Model
{
    use HasFactory;

    protected $table = 'calon_anggota';

    protected $fillable = [
        'nama',
        'nik',
        'umur',
        'alamat'
    ];
}
