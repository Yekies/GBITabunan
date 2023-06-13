<?php
  
namespace App\Http\Controllers;
   
use App\Models\Sejarah;
use App\Models\Karausel;
use Illuminate\Http\Request;
  
class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = Sejarah::latest()->paginate(5);
    
        return view('sejarah.index',compact('sejarah'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tampilsejarah(){
        $userkarausel = Karausel::all();
        $usersejarah = Sejarah::all();
        return view('users/sejarah.index', compact('usersejarah','userkarausel'));
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sejarah.create');
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
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);
        $input = $request->all();
  
         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'gambar/';
             $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $profileGambar);
             $input['gambar'] = "$profileGambar";
         }
    
         Sejarah::create($input);
     
        return redirect()->route('sejarah.index')
                        ->with('success','Product created successfully.');
    }   
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        return view('sejarah.show',compact('sejarah'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sejarah $sejarah)
    {
        return view('sejarah.edit',compact('sejarah'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
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
          
        $sejarah->update($input);
        return redirect()->route('sejarah.index')
                        ->with('success','Sejarah updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah)
    {
        $sejarah->delete();
    
        return redirect()->route('sejarah.index')
                        ->with('success','Sejarah deleted successfully');
    }
}   