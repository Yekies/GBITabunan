@extends('layout.home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"><br>
                <h2> Penyebutan Gebala sidan</h2>
            </div><hr>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul Gambar:</strong>
                {{ $profile->sabuntan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi Gambar:</strong>
                {{ $profile->desk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gambar:</strong>
                <img src="/gambar/{{ $profile->gambar }}" width="500px">
            </div>
        </div>
    </div><hr>
    <div class="pull-right">
        <a class="btn-sm btn btn-primary" href="{{ route('profile.index') }}">Kembali</a>
    </div>
@endsection