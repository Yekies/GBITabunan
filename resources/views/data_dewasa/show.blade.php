@extends('layout.home')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    

<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="card card-default">
    <div class="card-header">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Data Ayah</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Anak Anak</button>
            </li>
            {{-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
            </li> --}}
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    
                 <table id="w0" class="table table-condensed detail-view" style="width: 100%">
                    <tr class="text-center">
                        <th>gambar : </th>
                        <td><img src="/gambar/{{ $dewasa->gambar }}" width="100px"></td>
                    </tr>
                        <tr class="text-center">
                            <th  style="text-align: left;">No </th>
                            <td  style="text-align: left;">{{ $dewasa->id }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Masuk Tanggal </th>
                            <td  style="text-align: left;">{{ $dewasa->terdaftarsejak_tgl }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Tempat Lahir </th>
                            <td  style="text-align: left;">{{ $dewasa->tl }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Tanggal Lahir</th>
                            <td  style="text-align: left;">{{ $dewasa->tanggal_l }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Telepon </th>
                            <td  style="text-align: left;">{{ $dewasa->no_telpon }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Status Perkawinan </th>
                            <td  style="text-align: left;">{{ $dewasa->status_p }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Nama Lengkap </th>
                            <td  style="text-align: left;">{{ $dewasa->nama_lengkap }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Jenis Kelamin </th>
                            <td  style="text-align: left;">{{ $dewasa->jenis }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">TST</th>
                            <td  style="text-align: left;">{{ $dewasa->tst }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Ttl Penyeraan Anak </th>
                            <td  style="text-align: left;">{{ $dewasa->tgl_penyeraan_a }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">No PA </th>
                            <td  style="text-align: left;">{{ $dewasa->no_pa }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh </th>
                            <td  style="text-align: left;">{{ $dewasa->dilayani_oleha }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Gereja Penyeraan Anak</th>
                            <td  style="text-align: left;">{{ $dewasa->gereja_pa }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Tanggal Baptis</th>
                            <td  style="text-align: left;">{{ $dewasa->tgl_baptis }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Baptis Selam</th>
                            <td  style="text-align: left;">{{ $dewasa->no_bs }}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh</th>
                            <td  style="text-align: left;">{{ $dewasa->dilayani_olehb }}
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh Baptis Selam</th>
                            <td  style="text-align: left;">{{ $dewasa->gereja_bs }}
                        </tr>
            
                        
                        <tr class="text-center">
                            <th style="text-align: left;">Tanggal Pernikaan</th>
                            <td  style="text-align: left;">{{ $dewasa->tgl_pernikaan }}
                        </tr>
            
                        
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Pernikaan</th>
                            <td  style="text-align: left;">{{ $dewasa->no_pn }}
                        </tr>
                        
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh</th>
                            <td  style="text-align: left;">{{ $dewasa->dilayani_olehc}}
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Gereja Per</th>
                            <td  style="text-align: left;">{{ $dewasa->gereja_per}}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Beribada di Cabang</th>
                            <td  style="text-align: left;">{{ $dewasa->brb_c}}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Mengikuti Fa</th>
                            <td  style="text-align: left;">{{ $dewasa->mengikuti_fa}}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Fa</th>
                            <td  style="text-align: left;">{{ $dewasa->no_fa}}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Melayani</th>
                            <td  style="text-align: left;">{{ $dewasa->melayani}}</td>
                        </tr>
            
                        <tr class="text-center">
                            <th style="text-align: left;">Bidang</th>
                            <td  style="text-align: left;">{{ $dewasa->bidang}}</td>
                        </tr>
                 </table>
                       
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Nik</th>
                    </tr>
                    @foreach ($or as $anak)
                    <tr>
                        <td>{{ $anak->nama_lengkap}}</td>
                        <td>{{ $anak->jenis }}</td>
                        <td>{{ $anak->no_telpon }}</td>
                    </tr>
                    @endforeach
                </table>
                Banyak : {{ $or->count() }}
            </div>
          </div>
    </div>
</div>
</div>
@endsection

