@extends('layout.home')
@section('content')

        <h5 class="text-center">Ubah Data Pelayanan</h5>

     
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
    
    <form action="{{ route('pelayan.update',$pelayan->id)}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="nama_pelayan" value="{{ $pelayan->nama_pelayan }}" class="form-control" placeholder="Judul">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="judul" value="{{ $pelayan->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isian:</strong>
                    <textarea class="form-control" style="height:150px" name="isian" placeholder="Isian">{{ $pelayan->isian }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="gambar" class="form-control" placeholder="Gambar">
                    <img src="/gambar/{{ $pelayan->gambar }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn-sm btn btn-primary">Kirim</button>
            </div>
        </div>  
    </form>
@endsection