@extends('layouts.home')
@section('content')
<style>
    .wordp { word-spacing: 5px; }  
    </style>
<div class="container">
    @foreach($usersejarah as $product)
    <p class="text-center" style="font-size: 28px">{{ $product->judul }}</p><hr>
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body"> 
                            <p style="font-size: 20px">
                                <img src="/gambar/{{ $product->gambar }}" width="200px" height="200px"
                                align="left"/>
                                {{ $product->isi }}
                                </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection




