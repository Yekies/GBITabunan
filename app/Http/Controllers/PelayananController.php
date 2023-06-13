<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
            if ($request) {
                $search = $request->get('search');
                $pelayanan = Pelayanan::where('pran', 'like', '%'.$search.'%')->get();
                return view('pelayan.index', compact('pelayanan'));
            }
            $pelayanan = Pelayanan::latest()->paginate(5);
            return view('pelayan.index', compact('pelayanan'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelayan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            

                'nik' => 'required',
                'pran' => 'required',
                'tgl_trm_jbtn' => 'required',
                'tgl_akhir_jbtn' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);
  
        $input = $request->all();
  
         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'gambar/';
             $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $profileGambar);
             $input['gambar'] = "$profileGambar";
         }
    
         Pelayanan::create($input);
     
         return redirect()->route('pelayan.index') ->with('success','Pelayanan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelayanan $pelayanan)
    {
        return view('pelayan.show',compact('pelayanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelayanan $pelayan)
    {
        return view('pelayan.edit',compact('pelayan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelayanan $pelayan)
    {
        $request->validate([
            'nik' => 'required',
            'pran' => 'required',
            'tgl_trm_jbtn' => 'required',
            'tgl_akhir_jbtn' => 'required',
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
          
        $pelayan->update($input);
    
        return redirect()->route('pelayan.index')->with('success','pelayanan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelayanan $pelayan)
    {
        $pelayan->delete();
     
        return redirect()->route('pelayan.index') ->with('success','pelayanan deleted successfully');
    }
}
