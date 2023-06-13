<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Karausel;

class VideoController extends Controller
{
    public function index()
    {
        $video=video::all();
        return view('video.index',compact('video'));
    }
    public function tampilvideo(){
        $userkarausel = Karausel::all();
        $uservideo = Video::all();
        return view('users/video.index', compact('uservideo','userkarausel'));
    }
    public function create(){
        return view('video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimetypes:video/mp4,video/avi|max:20000'
        ]);
    
        $videoName = time().'.'.$request->file('video')->getClientOriginalExtension();
        $request->file('video')->move(public_path('videos'), $videoName);
        $video = new Video();
        $video->judul = $request->input('judul');
        $video->desk = $request->input('desk');
        $video->path = 'videos/'.$videoName;
        $video->save();
    
        return redirect()->route('video.index')->with('success', 'Video uploaded successfully.');
    }
    
    public function edit(Video $video){
        
        return view('video.edit', compact('video'));
    }

    public function update(Request $request, Video $video){
        $request->validate([
            'judul' => 'required',
            'desk' => 'required', 
            'video'=> 'required',
        ]);
  
        $video = Video::findOrFail($video);
        $video->judul = $request->input('judul');
        $video->desk = $request->input('desk');
        
        if ($request->hasFile('video')) {
            // hapus video lama
            $video::delete($video->path);
            
            // simpan video baru
            $path = $request->file('video')->store('videos');
            $video->path = $path;
        }
        
        $video->save();
        
        return redirect()->route('video.index')->with('success', 'Video berhasil diupdate.');

    }



    public function destroy(Video $video)
    {
        $video->delete();
     
        return redirect()->route('video.index') ->with('success','Video deleted successfully');
    }
 }