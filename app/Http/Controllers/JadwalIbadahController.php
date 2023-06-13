<?php

namespace App\Http\Controllers;

use App\Models\JadwalIbadah;
use Illuminate\Http\Request;

class JadwalIbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalIbadah = JadwalIbadah::all();

        return view('jadwalibadah.index', compact('jadwalIbadah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwalIbadah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nama_ibadah' => 'required',
            'pengkhotbah' => 'required',
            'jenis_ibadah' => 'required',
            'waktu' => 'required',
            'tanggal'=> 'required',
            
        ]);
        JadwalIbadah::create($request->all());
     
        return redirect()->route('jadwalibadah.index')
                        ->with('success','Jadwal Ibadah created successfully.');
    }

    /**
     * Display the specified resource.
     */ 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwalIbadah = JadwalIbadah::where('id',$id)->first();
        return view('jadwalibadah.edit',compact('jadwalIbadah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $jadwalIbadah = JadwalIbadah::where('id',$id)->first();
        $jadwalIbadah->nama_ibadah = $request->nama_ibadah;
        $jadwalIbadah->pengkhotbah = $request->pengkhotbah;
        $jadwalIbadah->jenis_ibadah = $request->jenis_ibadah;
        $jadwalIbadah->tanggal = $request->tanggal;
        $jadwalIbadah->waktu = $request->waktu;
        $jadwalIbadah->save();
        
            return redirect()->route('jadwalibadah.index')
                            ->with('success','Jadwal updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwalIbadah = JadwalIbadah::findOrFail($id);
        $jadwalIbadah->delete();
        return redirect()->route('jadwalibadah.index')
         ->with('success','Jadwal Ibadah Delete successfully.');
    }
}
