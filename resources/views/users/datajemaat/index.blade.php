@extends('layouts.home')
@section('content')
<div class="container">
        <div class="row">
            @foreach($datajemaat as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p><b>{{ $product->nik }}</b></p>
                            <p class="title">{{ $product->isi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection




