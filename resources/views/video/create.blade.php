
@extends('layout.home')
@section('content')     
     <div class="container">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h5 class="text-center">Upload Video</h5><hr>
            </div>
            <div class="panel-body">
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">Wendanak</button>
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
 
               <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">

                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Judul:</label>
                           <input type="text" name="judul" class="form-control"/>
                        </div>
                     </div>
                        
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Desk:</label>
                           <input type="text" name="desk" class="form-control"/>
                        </div>
                     </div>
                        <div class="col-md-12">
                        <div class="form-group">
                           <label>Masukan Video:</label>
                           <input type="file" name="video" class="form-control"/>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <button type="submit" class="btn-sm btn btn-primary">Submit</button>
                        </div>
                     </div>

                  </div>
               </form>
            </div>
         </div>
      </div>
      @endsection





