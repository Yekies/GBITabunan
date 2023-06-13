@extends('layouts.home')
@section('content')
<div class="container">
    <p class="text-center" style="font-size: 28px">Renungan Harian</p><hr>
        <div class="row">
            @foreach($renungan as $product)
                <div class="col-md-4 text-center">
                    <div class="card"style="background-color:#C0C0C0">
                        <div class="card-body">
                            <p><b>{{ $product->judul }}</b></p>
                            <p class="title">{{ $product->ayat }}</p>
                            <p>Tanggal update : &nbsp;<b>{{ $product->Tanggal }}</b></p>
                            <p class="title">{!! \Str::limit($product->isi,500) !!}</p>
                          <i class="bi bi-next" aria-hidden="true"></i><a class="btn btn-sm " href="{{ url('renuganlengkap', $product->id ) }}" style="background-color:#6495ED" >baca selengkapnya >></a>
                        </div>
                    </div><br>  
                </div>
            @endforeach 
        </div>
    </div>
@endsection




