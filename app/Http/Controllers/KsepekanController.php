<?php
namespace App\Http\Controllers;
use App\Models\Ksepekan;
use Illuminate\Http\Request;

class KsepekanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ksepekan = Ksepekan::latest()->paginate(5);

        return view('ksepekan.index',compact('ksepekan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ksepekan.create');
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
            'nama_kegiatan' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
        ]);
        Ksepekan::create($request->all());
        

        return redirect()->route('ksepekan.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ksepekan  $ksepekan
     * @return \Illuminate\Http\Response
     */
    public function show(Ksepekan $ksepekan)
    {
        return view('ksepekan.show',compact('ksepekan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ksepekan  $ksepekan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ksepekan $ksepekan)
    {
        return view('ksepekan.edit',compact('ksepekan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ksepekan  $ksepekan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ksepekan $ksepekan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
        ]);
    
        $ksepekan->update($request->all());

        return redirect()->route('ksepekan.index')
                        ->with('success','ksepekan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ksepekan  $ksepekan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ksepekan $ksepekan)
    {
        $ksepekan->delete();

        return redirect()->route('ksepekan.index')
                        ->with('success','ksepekan deleted successfully');
    }
}