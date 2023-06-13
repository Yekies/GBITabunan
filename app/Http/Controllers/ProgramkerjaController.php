<?php

namespace App\Http\Controllers;

use App\Models\Karausel;
use Illuminate\Http\Request;
use App\Models\Programkerja;
use Barryvdh\DomPDF\Facade;

use PDF;
class ProgramkerjaController extends Controller
{
    public function index()
    {
        $program = Programkerja::all();
        return view('programkerja.index', compact('program'));
    }
 public function pdf()
 {
     $program = Programkerja::all();
     $pdf = PDF::loadView('programkerja.pdf', compact('program'));
     return $pdf->download('programkerja.pdf');

 }

 public function tampilprogramkerja(){
    $userkarausel = Karausel::all();
    $userprogramkerja = Programkerja::all();
    return view('users/userprogramkerja.index', compact('userprogramkerja','userkarausel'));
}

  
    public function create(){
        return view('programkerja.create');
    }
    
    public function store(Request $request)

    {

        $data = new Programkerja;
        $data->program = $request->program;
        $data->tujuanp = $request->tujuanp;
        $data->waktu = $request->waktu;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect()->route('programkerja/create')->with('success', 'Renungan uploaded successfully.');
     
}
public function show(Programkerja $id)
{
    return view('programkerja.show');
}

public function edit(Programkerja $programkerja)
{
    return view('programkerja.edit',compact('programkerja'));
}


public function update(Request $request, Programkerja $programkerja)
{
    $request->validate([
        'program' => 'required',
        'tujuanp' => 'required',
        'waktu' => 'required',
        'keterangan' => 'required',
    ]);

    $programkerja->update($request->all());

    return redirect()->route('programkerja.index')
                    ->with('success','Program Kerja updated successfully');
}


public function destroy($id){
    $programkerja = Programkerja::find($id);
    $programkerja->delete();
    return redirect('programkerja');
}

}
