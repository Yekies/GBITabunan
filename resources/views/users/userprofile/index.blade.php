@extends('layouts.home')
@section('content')
<style>
  img {
      float: left;
  }
  </style>

<div class="container">
<div class="container my-5">
  <h4 style="text-align: center;" class="tex border-bottom">Data Statistik Jemaat</h4>
  <div class="row">
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color:#F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH UMUM</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle  bg-success d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $dewasa->count(); }}</span>
    </div>
    </div>
    </div>


    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH LAKI-LAKI</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle bg-info d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $maleCount }}</span>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH PEREMPUAN</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $femaleCount }}</span>
    </div>
    </div>
    </div>
  </div>


  <div class="row">
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color:#F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH UMUM</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle bg-pink d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(247, 105, 105)">
                <i class="fa fa-users text-white fs-3;"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $anak->count(); }}</span>
    </div>
    </div>
    </div>


    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH LAKI-LAKI</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(255, 106, 37)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $maleCount }}</span>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color: #F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH PEREMPUAN</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;background-color: rgb(240, 23, 7)">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $femaleCount }}</span>
    </div>
    </div>
    </div>




  </div>





  <div class="row d-flex justify-content-center">
        <!-- Row untuk konten -->
  
  <div class="col-12 col-lg-7 ">
    <h4 style="text-align: center;" class="tex border-bottom">Sambutan Gembala Sidang</h4>
  <div class="card mb-4" style="background-color: #edf0f3">
    <div class="row">
      @foreach($userprofile as $product)
        <div class="col-12 col-lg-4 ">
        <div class="card-body">
          <p>
         <a href="/gambar/{{ $product->gambar }}"><img src="/gambar/{{ $product->gambar }}"style="width:100%;height: 200px; border-radius:4px;"></a>
        </p>                            
         </div>
      </div>
      <div class="col-12 col-lg-8 ">
        <div class="card-body">
          <p><b>{{ $product->sabuntan }}</b></p>
          <p class="title">{{ $product->desk }}</p>                         
        </div><br>
      </div>
      @endforeach
    </div>
    </div>
  </div>
  
        <!-- Sidebar -->
        <div class="col-12 col-lg-4">
          <!-- Konten Sidebar 1 -->
          <!-- Konten Sidebar -->
          <h4 style="text-align: center;" class="tex border-bottom">Renungan Harian</h4>
          <div class="card mb-4 text-center"   style="background-color: #edf0f3">
            <div class="card-body">
                @foreach ($userrenungan as $product)
                <p><b>{{ $product->judul }}</b></p>
                <p class="title">{{ $product->judul }}</p>
                <p>Tanggal update : &nbsp;<b>{{ $product->tanggal }}</b></p>
                <p class="title">{{ $product->desk }}</p>
              <i class="bi bi-next" aria-hidden="true"></i><a class="btn btn-sm " href="{{ url('renuganlengkap', $product->id ) }}" style="background-color:#6495ED" >baca selengkapnya >></a>
                @endforeach
            </div>
        </div>
          <!-- Konten Sidebar 2 -->
        </div>
      </div>
    </div>

 <div class="container my-5">
  <div class="row d-flex justify-content-center">
        <!-- Row untuk konten -->
  
  <div class="col-12 col-lg-7 ">
    <h4 style="text-align: center;" class="tex border-bottom">Kegiatan Sepekan</h4>
  <div class="card mb-4"  style="background-color: #edf0f3">
    <div class="row">          
      <div class="col-12 col-lg-12 ">
        <div class="card-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>TANGGAL</th>
                      <th>WAKTU</th>
                      <th>NAMA KEGIATAN</th>
                     </tr>
                     @foreach ($jadwal as $tampil)
                     <tr>
                         <td>{{ $tampil->tanggal }}</td>
                         <td>{{ $tampil->waktu }}</td>
                         <td>{{ $tampil->nama_kegiatan }}</td>
                     </tr>
                       @endforeach
                  </table>        
         </div>
      </div>
     
    </div>
    </div>
  </div>
  
        <!-- Sidebar -->
        <div class="col-12 col-lg-4">
          <!-- Konten Sidebar 1 -->
          <!-- Konten Sidebar -->
          <h4 style="text-align: center;" class="tex border-bottom">Jadwal Ibadah</h4>
          <div class="card mb-4"   style="background-color: #edf0f3">
             <div class="row">
              <div class="col-12">
                <div class="card-body text-center">
                  @foreach ($jadwalibadah as $tampil)
                   <p><b> Sesi Ibadah : {{ $tampil->judul }}</b></p><br>
                   <p> Pengkhotbah : {{ $tampil->isi }}</p><br>
                   <p> Tanggal Pelaksanaan: {{ $tampil->tanggal }}</p><br>
                   <p> Waktu Pelaksanaan : {{ $tampil->waktu }}</p> 
                  @endforeach      
                </div>
              </div>
             </div>
          </div>
          <!-- Konten Sidebar 2 -->
        </div>
      </div>
    </div>
    

 <div class="container my-5">
  <div class="row d-flex justify-content-center">
        <!-- Row untuk konten -->
  
  <div class="col-12 col-lg-12">
    <h4 style="text-align: center;" class="tex border-bottom">Beritah Gereja</h4>
  <div class="card mb-4" style="background-color: #edf0f3">
    <div class="row">
      @foreach($userberitah as $product)
          
      <div class="col-12 col-lg-4 ">
        <div class="card-body">
          <p>
            <a href="/gambar/{{ $product->gambar }}"><img src="/gambar/{{ $product->gambar }}"style="width:100%;height: 200px; border-radius:4px;"></a>
         </div>
      </div>
      <div class="col-12 col-lg-8 ">
        <div class="card-body">
          <p><b>{{ $product->judul }}</b></p>
          <p>{{ $product->desk }}</p>                                
        </div><br>
      </div>
      @endforeach
    </div>
    </div>
  </div>
        <!-- Sidebar -->
      </div>,
    </div>,
  </div>
@endsection
