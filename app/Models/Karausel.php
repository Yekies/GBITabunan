<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karausel extends Model
{
    use HasFactory;
    protected $fillable = [
        'desk', 'gambar'
    ];
}
