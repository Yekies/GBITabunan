@extends('layout.home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"><br>
                <h2> Show Kegiatana Sepekan</h2>
            </div><hr>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                <strong>deskripsi:</strong>

                {{ $ksepekan->judul }}
                {{ $ksepekan->deskripsi }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $ksepekan->image }}" width="500px">
            </div>
        </div>
    </div>

    <hr>
    <div class="pull-right">
        <a class="btn-sm btn btn-primary" href="{{ route('ksepekan.index') }}">Kembali</a>
    </div>
@endsection