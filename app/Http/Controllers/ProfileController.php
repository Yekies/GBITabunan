<?php

namespace App\Http\Controllers;

use App\Models\Ksepekan;
use App\Models\Jadwal;
use App\Models\Profile;
use App\Models\Beritah;
use App\Models\Dataj;
use App\Models\Renungan;
use App\Models\JadwalIbadah;
use App\Models\Anak;
use App\Models\Dewasa;
use App\Models\Karausel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        return view('profile.index',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    public function tampilprofil(){
        
        $userkarausel = Karausel::all();
        $anak = Anak::all();
        $maleCount = Anak::where('jenis', 'Laki-laki')->count();
        $femaleCount = Anak::where('jenis', 'Perempuan')->count();


        $dewasa = Dewasa::all();
        $maleCount = Dewasa::where('jenis', 'Laki-laki')->count();
        $femaleCount = Dewasa::where('jenis', 'Perempuan')->count();



        $dataj = Dataj::all();
        $sepekan = Ksepekan::all();
        $userberitah=Beritah::all();
        $userprofile=Profile::all();
        $userrenungan = Renungan::latest()->paginate(1);
        $jadwal = Jadwal::all();
        $jadwalibadah = JadwalIbadah::latest()->paginate(2);
        return view('users/userprofile.index', compact('userprofile','userberitah','dataj','maleCount', 'femaleCount','sepekan','userberitah','userrenungan','jadwal','jadwalibadah','anak','dewasa','userkarausel'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sabuntan' =>'required',
            'desk' =>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);
        $input = $request->all();
  
         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'gambar/';
             $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $profileGambar);
             $input['gambar'] = "$profileGambar";
         }
    
         Profile::create($input);
     
         return redirect()->route('profile.index') ->with('success','Profile created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return view('profile.show',compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'sabuntan' => 'required',
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
          
        $profile->update($input);
    
        return redirect()->route('profile.index')->with('success','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profile.index')->with('Profile', 'Telah berhasil hapus');
    }
}
