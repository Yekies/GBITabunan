<?php

namespace App\Http\Controllers;

use App\Models\Karausel;
use Illuminate\Http\Request;

class KarauselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karausel = Karausel::all();
        return view('karausel.index',compact('karausel'));
    }

    public function tampilkarausel(){
        $userkarausel = Karausel::all();
        return view('layouts/userkarausel.index', compact('userkarausel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karausel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'desk' => 'required',

        ]);
  
        $input = $request->all();
  
         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'gambar/';
             $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $profileGambar);
             $input['gambar'] = "$profileGambar";
         }
    
         Karausel::create($input);
     
         return redirect()->route('karausel.index') ->with('success','Karausel created successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Karausel $karausel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karausel $karausel)
    {
        return view('karausel.edit', compact('karausel'));
    }   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karausel $karausel)
    {
        $request->validate([
            'desk' => 'required',
            'gambar' => 'required'
        ]); 
  
        $input = $request->all();
  
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }else{
            unset($input['gambar']);
        }
          
        $karausel->update($input);
    
        return redirect()->route('karausel.index')
                        ->with('success','Gambar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karausel $karausel)
    {
        $karausel->delete();

        return redirect()->route('karausel.index')
         
                    ->with('success','Karausel deleted successfully');

    }
}
