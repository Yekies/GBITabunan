@extends('layouts.home')
@section('content')
<div class="container">
    <h4 class="text-center">Video</h4><hr> 
        <div class="row">
            @foreach($uservideo as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <video width="100%" height="100%" controls>
                                <source src="{{ asset($product->path) }}" type="video/mp4">
                            </video>
                            <p class="text-center"><b>{{ $product->judul }}</b></p><hr>
                            <p class="title">{{ $product->desk }}</p>
                        </div><br>
                    </div><br>
                </div>
            @endforeach
        </div>
    </div>
@endsection




