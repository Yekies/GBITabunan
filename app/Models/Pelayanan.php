<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $table="pelayanans";
    protected $fillable = [

        'nik',
        'pran',
        'tgl_trm_jbtn',
        'tgl_akhir_jbtn',
        'gambar'
    ];
}
