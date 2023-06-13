@extends('layout.home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show Live Streaming</h2>
            </div><hr>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $live->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>link:</strong>
                {{ $live->link }}
            </div>
        </div>
    </div>
    <hr>
    <div class="pull-right">
        <a class="btn-sm btn btn-primary" href="{{ route('live.index') }}"> Kembali</a>
    </div>
@endsection
