<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalIbadah extends Model
{
    use HasFactory;
    protected $table="jadwalibadahs";
    protected $fillable=[
  

        'nama_ibadah',
        'pengkhotbah',
        'jenis_ibadah',
        'waktu',
        'tanggal'
       
    ];
}
