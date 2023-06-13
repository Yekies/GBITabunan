@extends('layouts.home')
@section('content')
<div class="container">
        <div class="row">
            @foreach($userkarausel as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="/gambar/{{ $product->gambar }}"><img src="/gambar/{{ $product->gambar }}" width="100%"></a>
                            <p class="title">{{ $product->desk }}</p>
                        </div><br>
                    </div><br>
                </div>
            @endforeach
        </div>
    </div>
@endsection
