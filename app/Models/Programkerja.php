<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programkerja extends Model
{
    use HasFactory;

    protected $table="programkerjas";
    protected $fillable=[
        'program','tujuanp','waktu','keterangan'
    ];
}
