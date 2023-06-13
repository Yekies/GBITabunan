<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOr extends Model
{
    use HasFactory;

    protected $table="struktuorganisasis";
    protected $fillable=[
        'judul','desk','gambar'
    ];  

}
