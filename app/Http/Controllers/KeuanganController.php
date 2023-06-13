<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Karausel;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $keuangan = Keuangan::all();
         $pemasukan = Keuangan::where('jenis', 'pemasukan')->sum('jumlah');
         $pengeluaran = Keuangan::where('jenis', 'pengeluaran')->sum('jumlah');

         $pemasukan1 = Keuangan::where('jenis', 'pemasukan')->get();
         $pengeluaran1 = Keuangan::where('jenis', 'pengeluaran')->get();

         $saldo = $pemasukan - $pengeluaran;
    
   
         return view('keuangan.index', compact('keuangan','pemasukan', 'pengeluaran', 'saldo','pemasukan1', 'pengeluaran1'));

        // $keuangan = Keuangan::orderBy('tanggal', 'desc')->get();
        // $saldo = Keuangan::getSaldo();
        // return view('keuangan.index', compact('keuangan', 'saldo'));
    }
    public function tampilkeuangan(){
        $userkarausel = Karausel::all();
        $keuangan = Keuangan::all();
        $pemasukan = Keuangan::where('jenis', 'pemasukan')->sum('jumlah');
        $pengeluaran = Keuangan::where('jenis', 'pengeluaran')->sum('jumlah');
        $pemasukan1 = Keuangan::where('jenis', 'pemasukan')->get();
        $pengeluaran1 = Keuangan::where('jenis', 'pengeluaran')->get();

        $saldo = $pemasukan - $pengeluaran;
        $userkeuangan = Keuangan::all();
        return view('users/userkeuangan.index', compact('keuangan','pemasukan', 'pengeluaran', 'saldo','pemasukan1', 'pengeluaran1','userkarausel'));
    } 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keuangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'=>'required',
            'keterangan'=>'required',
            'jenis'=>'required',
            'jumlah'=>'required',
        ]);
        Keuangan::create($request->all());

        return redirect()->route('keuangan.index')
        ->with('success','Data Keuangan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keuangan $keuangan)
    {
        return view('renungan.show',compact('renungan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keuangan $keuangan)
    {
        return view('keuangan.edit',compact('keuangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keuangan $keuangan)
    {
        $request->validate([
            'tanggal'=>'required',
            'keterangan'=>'required',
            'jenis'=>'required',
            'jumlah'=>'required',
        ]);
    
        $keuangan->update($request->all());
    
        return redirect()->route('keuangan.index')
                        ->with('success','Sejarah updated successfully');
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keuangan $keuangan)
    {
        $keuangan->delete();
    
        return redirect()->route('keuangan.index')
                        ->with('success','Live deleted successfully');
    }
}
