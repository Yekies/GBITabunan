@extends('layouts.home')
@section('content')
<div class="container">
    <h4 class="text-center">Gambar</h4><hr>
        <div class="row">
            @foreach($userimg as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="/image/{{ $product->image }}"><img src="/image/{{ $product->image }}" width="100%"></a> 
                            <p><b>{{ $product->name }}</b></p>
                            <h4>{!! \Str::limit($product->isi,300) !!}</h4>
                            
                            <p>
                                <a class="btn btn-sm read-more" href="{{ url('gambarlengkap', $product->id ) }}" style="background-color:#6495ED" >baca selengkapnya >></a>
                               
                              </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


