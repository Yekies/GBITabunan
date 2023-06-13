<?php

namespace App\Http\Controllers;

use App\Models\StrukturOr;
use App\Models\Karausel;
use Illuminate\Http\Request;

class StrukturOrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $struktur = StrukturOr::all();
        return view('strukturor.index', compact('struktur'));

    }
    public function tampilstrukturor(){
        $userkarausel = Karausel::all();
        $strukturor = StrukturOr::all();
        return view('users/strukturor.index',compact('strukturor','userkarausel'));
      }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('strukturor.create');
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
    
         StrukturOr::create($input);
     
         return redirect()->route('strukturor.index') ->with('success','Struktur Organisasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StrukturOr $strukturOr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StrukturOr $strukturor)
    {
        return view('strukturor.edit',compact('strukturor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StrukturOr $strukturor)
    {
        $request->validate([
            'judul' => 'required',
            'desk' => 'required', 
            'gambar'=> 'required ',
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
          
        $strukturor->update($input);
    
        return redirect()->route('strukturor.index')->with('success','Structur Organisasi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StrukturOr $strukturor)
    {
        $strukturor->delete();
     
        return redirect()->route('strukturor.index') ->with('success','Struktur Organisasi deleted successfully');
    }
}
