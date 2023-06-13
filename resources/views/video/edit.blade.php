
@extends('layout.home')
@section('content')     
     <div class="container">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h5 class="text-center">Edit Video</h5><hr>
            </div>
            <div class="panel-body">
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert"></button>
                      <strong>{{ $message }}</strong>
                   </div>
            
               @endif
 
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif

               <form action="{{ route('video.update',$video->id)}}" method="POST" enctype="multipart/form-data"> 
                  @csrf
                  @method('PUT')
                  <div class="row">

                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Judul:</label>
                           <input type="text" name="judul" value="{{ $video->judul }}" class="form-control"/>
                        </div>
                     </div> 
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Desk:</label>
                           <input type="text" name="desk" value="{{ $video->desk }}" class="form-control"/>
                        </div>
                     </div>
                     <div class="col-md-12">
                           <div class="form-group">
                           <label>Masukan Video:</label>
                           <input type="file" name="path" class="form-control"/>
                           <video width="220" height="140" controls>
                            <source src="{{ asset($video->path) }}" type="video/mp4">
                        </video>
                        </div>
                        </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      @endsection





