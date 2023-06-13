<?php

namespace App\Http\Controllers;
use App\Models\Karausel;
use App\Models\Renungan;
use Illuminate\Http\Request;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $renungan=Renungan::all();
        return view('renungan.index',compact('renungan'));
    }

    public function tampilrenungan(){
        $userkarausel = Karausel::all();
        $renungan = Renungan::all();
        return view('users/renungan.index',compact('renungan','userkarausel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('renungan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi =$request->validate([
            'judul'=>'required',
            'ayat'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
            
        ]);
        
        
        $renungan = Renungan::create([
            'judul' => $request->judul,
            'ayat' => $request->ayat,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
           
        ]);
        // $data->save();
        return redirect()->route('renungan.index')->with('success', 'Renungan uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */

     
    public function show(Renungan $renungan)
    {
        return view('users.renungan.show',compact('renungan'));
    }

    public function getRenungan($id){

        $renungan = Renungan::Find($id);
        $userkarausel = Karausel::all();
        return view('users.renungan.show',compact('renungan','userkarausel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Renungan $renungan)
    {
        return view('renungan.edit',compact('renungan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Renungan $renungan)   
    {
        $request->validate([
            'judul'=>'required',
            'ayat'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
        ]);
    
        $renungan->update($request->all());
    
        return redirect()->route('renungan.index')
                        ->with('success','renungan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renungan $renungan)
    {
        $renungan->delete();

        return redirect()->route('renungan.index')
                         ->with('success', 'Data berhasil hapus');
    }
}
