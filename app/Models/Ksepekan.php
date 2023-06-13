<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ksepekan extends Model
{
    use HasFactory;
    protected $table="ksepekans";
    protected $fillable =  [
        'nama_kegiatan','judul',   'image', 'deskripsi'
    ];
}
