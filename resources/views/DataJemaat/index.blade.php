@extends('layout.home')
@section('content')
<div class="container">
  <div class="row">
    
    <div class="col-12 col-md-6 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-6 rounded" style="background-color:#F9FFFF;">
    <div class="col-12 text-center">
            <span>DATA JEMAAT DEWASA</span><hr>
        <div class="col-12 text-center">
          <a href="{{ url('dewasa') }}" class="btn" style="background-color: #5495f5">LIHAT DATA JEMAAT DEWASA</a>
        </div><br><br>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 d-flex mt-md-0 mb-4" >
        <div class="col-12 shadow-sm p-6 rounded" style="background-color:#F9FFFF;">
        <div class="col-12 text-center">
                <span>DATA JEMAAT ANAK</span><hr>
            <div class="col-12 text-center">
              <a href="{{ url('anak') }}" class="btn btn" style="background-color: #5495f5">LIHAT DATA JEMAAT ANAK</a>
            </div><br><br>
        </div>
        </div>
        </div>
</div>
  
@endsection