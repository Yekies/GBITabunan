@extends('layout.home')
@section('content')
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Struktur Organisasi</h2>
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
    
    <form action="{{ route('strukturor.update',$strukturor->id)}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul : </strong>
                    <input type="text" name="judul" value="{{ $strukturor->judul }}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi :</strong>
                    <input type="text" name="desk" value="{{ $strukturor->judul }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="gambar" class="form-control">
                    <img src="/gambar/{{ $strukturor->gambar }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn-sm btn btn-primary">Kirim</button>
            </div><br>
        </div>  
    </form>
@endsection