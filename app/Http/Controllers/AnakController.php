<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Dewasa;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request) {

            $anak = Anak::all();
            $maleCount = Anak::where('jenis', 'Laki-laki')->count();
            $femaleCount = Anak::where('jenis', 'Perempuan')->count();
            $otherCount = Anak::where('jenis', 'pilih')->count();
          
        }
        $search = $request->get('search');
        $anak = Anak::where('nama_lengkap', 'like', '%'.$search.'%')->get();
        return view('data_anak.index', compact('anak','maleCount', 'femaleCount', 'otherCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idOrtu = Dewasa::all();
        return view('data_anak.create',compact('idOrtu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                //melakukan validasi data
                $request->validate([
                    'id_ortu'=>'required',
                    'terdaftarsejak_tgl'=>'required',
                    'tl'=>'required',
                    'tanggal_l'=>'required',
                    'jenis'=>'required',
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
            
                 Anak::create($input);
        
        
                //jika data berhasil ditambahkan, akan kembali ke halaman utama
                return redirect('anak')
                    ->with('success', 'Data anak Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anak $anak)
    {
        $or = Dewasa::all();
        return view('data_anak.show',compact('anak','or'));
    }

    // public function dewasa(){
    //     $or = Dewasa::all();
    //     return view('data_anak.anak',compact('or'));
    // }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anak $anak)
    {
        return view('data_anak.edit',compact('anak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anak $anak){

            // dd($request);
            $request->validate([
                'id_ortu'=>'required',
                'terdaftarsejak_tgl'=>'required',
                'tl'=>'required',
                'tanggal_l'=>'required',
                'jenis'=>'required',
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
              
            $anak->update($input);
            return redirect('anak')
                            ->with('success','Data Jemaat updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anak $anak)
    {
        $anak->delete();

        return redirect('anak')
                        ->with('success','Data Jemaat deleted successfully');
    }
}
