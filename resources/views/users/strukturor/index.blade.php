@extends('layouts.home')
@section('content')
<div class="container">
    @foreach($strukturor as $product)
    <h4 class="text-center">{{ $product->judul }}</h4><hr>
       <div class="row">
                <div class="col-md-12">
                        <a href="/image/{{ $product->gambar }}"><img src="/gambar/{{ $product->gambar }}" width="100%", height="600px"></a>
                        </div><br>
                    </div><br>
                </div>
            @endforeach
        </div>
    </div>
@endsection




