<?php

namespace App\Http\Controllers;

use App\Models\Dataj;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

use PDF;

class DatajController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataj = Dataj::all();
        $maleCount = Dataj::where('jk', 'Laki-laki')->count();
        $femaleCount = Dataj::where('jk', 'Perempuan')->count();
        $otherCount = Dataj::where('jk', 'pilih')->count();
        return view('dataj/index',compact('dataj','maleCount', 'femaleCount', 'otherCount'));

    }

    public function jumlahjemaat()
    {
        $dataj = Dataj::all();
        $maleCount = Dataj::where('jk', 'Laki-laki')->count();
        $femaleCount = Dataj::where('jk', 'Perempuan')->count();
        $otherCount = Dataj::where('jk', 'pilih')->count();
        return view('home',compact('dataj','maleCount', 'femaleCount', 'otherCount'));

    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $dataj = Dataj::where('nama_lengkap', 'like', '%'.$search.'%')->get();
        $maleCount = Dataj::where('jk', 'Laki-laki')->count();
        $femaleCount = Dataj::where('jk', 'Perempuan')->count();
        $otherCount = Dataj::where('jk', 'pilih')->count();
        return view('dataj.index', compact('dataj','maleCount', 'femaleCount', 'otherCount'));
    }
    public function tampildatajemaat(){
        $datajemaat=Dataj::all();
        return view('users/datajemaat.index',compact('datajemaat'));
      }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataj.create');
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'id_anak'=>'required',
            'nama_kk'=>'required',
            'terdaftarsejak_tgl'=>'required',
            'tl'=>'required',
            'tanggal_l'=>'required',
            'jk'=>'required',
            'no_telpon'=>'required',
            'status_p'=>'required',
            'nama_lengkap'=>'required',
            'tst'=>'required',


            'tgl_penyeraan_a'=>'required',
            'no_pa'=>'required',
            'dilayani_oleha'=>'required',
            'gereja_pa'=>'required',
            
        
            'tgl_baptis'=>'required',
            'no_bs'=>'required',
            'dilayani_olehb'=>'required',
            'gereja_bs'=>'required',


            'tgl_pernikaan'=>'required',
            'no_pn'=>'required',
            'dilayani_olehc'=>'required',
            'gereja_per'=>'required',


            'brb_c'=>'required',

            'mengikuti_fa'=>'required',
            'no_fa'=>'required',
            'melayani'=>'required',
            'bidang'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
        $input = $request->all();
  
         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'gambar/';
             $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $profileGambar);
             $input['gambar'] = "$profileGambar";
         }
    
         Dataj::create($input);

        return redirect()->route('dataj.index')
                        ->with('success','Data Jemaat created successfully.');
    }
    /**
     * Display the specified resource.
     */

     public function show(Dataj $dataj)
     {
         return view('dataj.show',compact('dataj'));
     }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dataj $dataj)
    {
        return view('dataj.edit',compact('dataj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dataj $dataj){

            // dd($request);
            $request->validate([
                'id_anak'=>'required',
                'nama_kk'=>'required',
                'terdaftarsejak_tgl'=>'required',
                'tl'=>'required',
                'tanggal_l'=>'required',
                'jk'=>'required',
                'no_telpon'=>'required',
                'status_p'=>'required',
                'nama_lengkap'=>'required',
                'tst'=>'required',
    
    
                'tgl_penyeraan_a'=>'required',
                'no_pa'=>'required',
                'dilayani_oleha'=>'required',
                'gereja_pa'=>'required',
                
            
                'tgl_baptis'=>'required',
                'no_bs'=>'required',
                'dilayani_olehb'=>'required',
                'gereja_bs'=>'required',
    
    
                'tgl_pernikaan'=>'required',
                'no_pn'=>'required',
                'dilayani_olehc'=>'required',
                'gereja_per'=>'required',
    
    
                'brb_c'=>'required',
    
                'mengikuti_fa'=>'required',
                'no_fa'=>'required',
                'melayani'=>'required',
                'bidang'=>'required',
              'gambar' => 'required'
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
              
            $dataj->update($input);
            return redirect()->route('dataj.index')
                            ->with('success','Data Jemaat updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dataj $dataj)
    {
        $dataj->delete();

        return redirect()->route('dataj.index')
                        ->with('success','Data Jemaat deleted successfully');
    }
}
