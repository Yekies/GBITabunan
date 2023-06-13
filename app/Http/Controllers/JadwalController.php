<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Karausel;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();

        return view('jadwal.index', compact('jadwal'));
    }
    public function tampiljadwal(){
        $userkarausel = Karausel::all();
        $userjadwal = Jadwal::all();
        return view('users/jadwal.index', compact('userjadwal','userkarausel'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            
        ]);
    
        Jadwal::create($request->all());
     
        return redirect()->route('jadwal.index')
                        ->with('success','Jadwal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {

            $request->validate([
                'nama_kegiatan' => 'required',
                'waktu' => 'required',
                'tanggal' => 'required',
                'tempat' => 'required',
            ]);
        
            $jadwal->update($request->all());
        
            return redirect()->route('jadwal.index')
                            ->with('success','Jadwal updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
    
        return redirect()->route('jadwal.index')
                        ->with('success','Jadwal deleted successfully');
    }
}
