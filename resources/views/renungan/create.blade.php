@extends('layout.home')
@section('content')
<div class="container">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Membuat Renungan Harian 
    </h5>

    </div> 
  <div class="card-body">
          
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('renungan.store') }}" method="POST">
    @csrf  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                <input type="text" name="judul" class="form-control" placeholder="Judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal:</strong>
                <input type="date" name="tanggal"placeholder="Tanggal Lahir" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi:</strong>
                <textarea class="form-control" style="height:150px" name="isi" placeholder="Isi"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ayat :</strong>
                <input type="text" name="ayat"placeholder="Tanggal Lahir" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn-sm btn btn-primary">Submit</button>     
        </div>
    </div>
   
</form>
</div>
</div>
</div>
@endsection



