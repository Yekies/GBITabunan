<?php

namespace App\Http\Controllers;
use App\Models\Anak;
use App\Models\Dewasa;
use Illuminate\Http\Request;
class DewasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request) {

            $dewasa = Dewasa::all();
            $maleCount = Dewasa::where('jenis', 'Laki-laki')->count();
            $femaleCount = Dewasa::where('jenis', 'Perempuan')->count();
            $otherCount = Dewasa::where('jenis', 'pilih')->count();
           
    
        }
    
        $search = $request->get('search');
        $dewasa = Dewasa::where('nama_lengkap', 'like', '%'.$search.'%')->get();
         return view('data_dewasa.index', compact('dewasa','maleCount', 'femaleCount', 'otherCount'));
       
    }
    public function indez()
    {
            $anak = Anak::all(); 
            $dewasas = Dewasa::all();
            $maleCount = Dewasa::where('jenis', 'Laki-laki')->count();
            $femaleCount = Dewasa::where('jenis', 'Perempuan')->count();
            $otherCount = Dewasa::where('jenis', 'pilih')->count();
            
         return view('home', compact('dewasas','maleCount', 'femaleCount', 'otherCount','anak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idOrtu = Dewasa::all();
        return view('data_dewasa.create',compact('idOrtu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                //melakukan validasi data
                $request->validate([
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
            
                 Dewasa::create($input);
        
        
                //jika data berhasil ditambahkan, akan kembali ke halaman utama
                return redirect('dewasa')
                    ->with('success', 'Data dewasa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $dewasa = Dewasa::find($id);
        $or = Anak::where('id_ortu', $dewasa->id)->get();
        return view('data_dewasa.show',compact('dewasa','or'));
    }

    // public function dewasa(){
    //     $or = Dewasa::all();
    //     return view('data_dewasa.dewasa',compact('or'));
    // }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dewasa $dewasa)
    {
        return view('data_dewasa.edit',compact('dewasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dewasa $dewasa){

            // dd($request);
            $request->validate([
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
              
            $dewasa->update($input);
            return redirect('dewasa')
                            ->with('success','Data Jemaat updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dewasa $dewasa)
    {
        $dewasa->delete();

        return redirect('dewasa')
                        ->with('success','Data Jemaat deleted successfully');
    }
}
