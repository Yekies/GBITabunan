@extends('layouts.home')
@section('content')
<div class="container">
            @foreach($userberitah as $product)
            <style>
                img {
                    float: left;
                }
                </style>
        <div class="card">
        <div class="row">             
            <div class="col-md-3">
                  <div class="card-body">
                   <p>
                  <a href="/gambar/{{ $product->gambar }}"><img src="/gambar/{{ $product->gambar }}" width="100%"></a>
                 </p>                            
                  </div><br>
              </div>
              <div class="col-md-9">
                  <div class="card-body">
                    <p><b>{{ $product->judul }}</b></p>
                    <p class="title">{{ $product->deskripsi }}</p>                         
                  </div><br>
              </div>
        </div>
        <br><br><br>
        @endforeach
    </div>
</div>
@endsection


