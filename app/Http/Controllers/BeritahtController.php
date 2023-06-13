<?php

namespace App\Http\Controllers;

use App\Models\Beritah;
use App\Models\Karausel;
use Illuminate\Http\Request;

class BeritahtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritah = Beritah::all();
        return view('beritah.index',compact('beritah'));
    }

    public function tampilbeeritah(){
        $userkarausel = Karausel::all();
        $userberitah=Beritah::all();
        return view('users/userberitah.index', compact('userberitah','userkarausel'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beritah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'desk' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        $input = $request->all();

         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'gambar/';
             $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $profileGambar);
             $input['gambar'] = "$profileGambar";
         }

         Beritah::create($input);

         return redirect()->route('beritah.index') ->with('success','Pelayanan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function getBeritah($id){

        $userberitah = Beritah::Find($id);
        return view('users/userberitah.show',compact('userberitah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beritah $beritah)
    {
        return view('beritah.edit', compact('beritah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beritah $beritah)
    {
        $request->validate([
            'judul' => 'required',
            'desk' => 'required',
            'gambar' => 'required',
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileGambar);
            $input['gambar'] = "$profileGambar";
        }else{
            unset($input['gambar']);
        }

        $beritah->update($input);

        return redirect()->route('beritah.index')->with('success','Structur Organisasi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beritah $beritah)
    {
        $beritah->delete();

        return redirect()->route('beritah.index')->with('success','Beritah berahasil hapus');
    }
}
