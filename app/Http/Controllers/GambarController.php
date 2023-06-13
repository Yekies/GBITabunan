<?php
  
namespace App\Http\Controllers;
  
  
use Illuminate\Support\Facades\Storage;
use App\Models\Gambar;
use App\Models\Karausel;
use Illuminate\Http\Request;
  
class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = Gambar::all();
        return view('gambar.index',compact('foto'));
    }
   
    public function tampilgambar(){
        $userkarausel = Karausel::all();
        $userimg = Gambar::all();
        return view('users/gambar.index',compact('userimg','userkarausel'));
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gambar.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'isi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Gambar::create($input);
     
        return redirect()->route('foto.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function getGambar($id){

        $userimg = Gambar::Find($id);
        $userkarausel = Karausel::all();
        return view('users.gambar.show',compact('userimg','userkarausel'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function edit(Gambar $foto)
    {
        return view('gambar.edit',compact('foto'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gambar $foto)
    {
        $request->validate([
            'name' => 'required',
            'isi' => 'required'
        ]); 
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $foto->update($input);
    
        return redirect()->route('foto.index')
                        ->with('success','Gambar updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambar $foto)
    {
        
        $foto->delete();
     
        return redirect()->route('foto.index')
                        ->with('success','Gambar deleted successfully');
    }
}