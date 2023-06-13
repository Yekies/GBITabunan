<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'link',
        'tema',
        'hari',
        'tanggal',
        'waktu',
        'tempat',
        'pengkhotba'
   
    ];
}
