<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritah extends Model
{
    use HasFactory;

    protected $table ="beritahs";
    protected $fillable=[
        'judul','desk','gambar'
    ];
}
