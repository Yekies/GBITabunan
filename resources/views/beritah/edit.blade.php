@extends('layout.home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 class="text-center">Edit Gambar</h5><hr>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('beritah.update',$beritah->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" value="{{ $beritah->judul }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
           
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="desk">{{ $beritah->desk }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar :</strong>
                    <input type="file" name="gambar" class="form-control">
                    <img src="/gambar/{{ $beritah->gambar}}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12"><hr>
              <button type="submit" class="btn-sm btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection