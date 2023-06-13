@include('layouts.library')
@extends('layouts.home')
@section('content')
<style>
    .wordp { word-spacing: 5px; }  
    p{
       
    }
</style>
 <div class="container card">
 <div class="row">
  <div class="col-12">
        <center><br>
            <a href="/image/{{ $userimg->image }}"><img src="/image/{{ $userimg ->image }}" width="1100px" style="height: 500px;border-radius:3px;"></a><br><br> 
            <p style="font-size: 18px;"><b>{{ $userimg->name }}</b></p><br><br>
        </center>
        <p style="text-align: justify;font-size: 18px;" class="wordp"> {{ $userimg->isi }}</p>
  </div>
 </div>
 </div> 
@endsection