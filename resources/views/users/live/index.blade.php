@extends('layouts.home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        @foreach ($live  as $dt)
        <div class="text-center">
            <p style="font-size: 28px">{{ $dt->judul }}</p><hr>
        </div>
        <div class="row card">
            <div style="font-size: 20px">
                <p>Tema &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  {{ $dt->tema }}</p>
            </div>    
            <div style="font-size: 20px">
                <p>Pengkhotbah &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;  {{ $dt->pengkhotba }}</p>
            </div>        
            <div style="font-size: 20px">
                <p><i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i> &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;  {{ $dt->waktu }}</p>
            </div>
            <div style="font-size: 20px">
                <p><i class="bi bi-calendar-check"></i> &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;  {{ $dt->hari }} / {{ $dt->tanggal }}</p>
            </div>
            <div style="font-size: 20px">
               
                <p>  <a href="https://www.google.com/maps/place/GBI+Tambunan-Laguboti/@2.347921,99.1044641,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipNZ57_NJiCVaejDeC2Rft_Vu3vn5DDqUCp8cgl9!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNZ57_NJiCVaejDeC2Rft_Vu3vn5DDqUCp8cgl9%3Dw203-h152-k-no!7i4608!8i3456!4m13!1m5!8m4!1e2!2s117397442312714270510!3m1!1e1!3m6!1s0x302e07e46fbbfefb:0xaa2d3c66f9f43ef5!8m2!3d2.347558!4d99.1045445!10e5!16s%2Fg%2F11h7s1kr4s"><i class="bi bi-geo-alt-fill" style="color: brown"></i> {{ $dt->tempat }}</a>&nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;  </p>
            </div>
               
            <div style="font-size: 20px">
                <p>Link &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;  <a href="{{ $dt->link }}">{{ $dt->link }}</a></p>
            </div>
        </div>
    @endforeach
     
@endsection