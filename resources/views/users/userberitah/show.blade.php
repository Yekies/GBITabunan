@extends('layouts.home')
@section('content')
<style>
.wordp { word-spacing: 5px; }  
</style>
<p class="text-center" style="font-size: 28px">Detail Renungan Harian</p>
 <div class="container card">

 <div class="row">
  <div class="col-12">
    <h4>Tanggal : {{ $renungan->tanggal }}</h4><br><br>
        <center>
          <p style="font-size: 18px;"><b>{{ $renungan->judul }}</b></p><br>
          <h5 style="font-size: 18px;">{{ $renungan->ayat }}</h5><br>
        </center>
        <p style="text-align: justify;font-size: 18px;" class="wordp"> {{ $renungan->isi }}</p>
  </div>
 </div>
 </div> 
@endsection
