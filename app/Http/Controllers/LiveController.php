<?php

namespace App\Http\Controllers;

use App\Models\Karausel;
use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function index()
    {
        $data=Live::all();
        return view('live.index',compact('data'));
    }

    public function create()
    {
        return view('live.create');
    }
    public function tampillive(){
        $userkarausel = Karausel::all();
        $live = Live::all();
        return view('users/live.index', compact('live','userkarausel'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi =$request->validate([
            'judul'=>'required',
            'link'=>'required',
            'tema'=>'required',
            'hari'=>'required',
            'tanggal'=>'required',
            'waktu'=>'required',
            'tempat'=>'required',
            'pengkhotba'=>'required',
        ]);
        
        $data = Live::create([
            'judul' => $request->judul,
            'link' => $request->link,
            
            'tema'=>$request->tema,
            'hari'=>$request->hari,
            'tanggal'=>$request->tanggal,
            'waktu'=>$request->waktu,
            'tempat'=>$request->tempat,
            'pengkhotba'=>$request->pengkhotba,
           
        ]);
        return redirect()->route('live.index')
        ->with('success','Data Jemaat created successfully.');

    }
    public function show(Live $live)
    {
        return view('live.show',compact('live'));
    } 

    public function edit(Live $live)
    {
        
            return view('live.edit',compact('live'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Live $live)
    {
        $request->validate([
            'judul' => 'required',
            'link' => 'required',
            'pengkhotba'=>'required',
        ]);
    
        $live->update($request->all());
    
        return redirect()->route('live.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function destroy(Live $live)
    {
        $live->delete();
    
        return redirect()->route('live.index')
                        ->with('success','Live deleted successfully');
    }
}
    