<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table="keuangan";
    protected $fillable = ['tanggal', 'keterangan', 'jenis', 'jumlah','saldo'];

    public static function getSaldo()
    {
        $pemasukan = Keuangan::where('jenis', 'pemasukan')->sum('jumlah');
        $pengeluaran = Keuangan::where('jenis', 'pengeluaran')->sum('jumlah');
        return $pemasukan - $pengeluaran;
    }
 

}
