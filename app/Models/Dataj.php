<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataj extends Model
{
    use HasFactory;
    protected $table="datajemaats";
    protected $fillable=
    ['id_anak',
    'nama_kk',
    'terdaftarsejak_tgl',
    'tl',
    'tanggal_l',
    'jk',
    'no_telpon',
    'status_p',
    'gambar',
    'nama_lengkap', 
    'tst',
    'tgl_penyeraan_a',
    'no_pa',
    'dilayani_oleha',
    'gereja_pa',
    'tgl_baptis',
    'no_bs',
    'dilayani_olehb',
    'gereja_bs',
    'tgl_pernikaan',
    'no_pn',
    'dilayani_olehc',
    'gereja_per',
    'brb_c',
    'mengikuti_fa',
    'no_fa',
    'melayani',
    'bidang'];
}
