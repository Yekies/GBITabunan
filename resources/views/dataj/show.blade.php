@extends('layout.home')
@section('content')
<style>
	.horizontal_center{
     /*mengatur border bagian atas tag div */
	   border-top: 6px solid black;
     /* mengatur tinggi tag div*/
     height: 2px;
     /*mengatur lebar tag div*/
     width : 100%;
    }
	</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Data Jemaat </h2> 
                <img class="animation__shake" src="/img/logo.png" alt="AdminLTELogo" height="120" width="120" style="border-radius:30px"><a class="navbar-brand text-brand" href="index.html"></a>
                <h1>Selamat Datang di GBI (Gereja Betel Indonesia), Jemaat Tambunan</h1>
                <div class="text-center">
                    <div class="preloader flex-column justify-content-center align-items-center">
                      </div>
                    <h2>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </h2>
                </div>
                <div class="horizontal_center"></div>
            </div>
        </div>
    </div>
    <table class="table table-sm ">
        <tr>
            <th>gambar : </th>
            <td><img src="/gambar/{{ $dataj->gambar }}" width="100px"></td>
        </tr>
            <tr class="text-center">
                <th  style="text-align: left;">No </th>
                <td  style="text-align: left;">{{ $dataj->id }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Nomor KAJ </th>
                <td  style="text-align: left;">{{ $dataj->id_anak}}</td>
            </tr>


            <tr class="text-center">
                <th style="text-align: left;">Nama Kk </th>
                <td  style="text-align: left;">{{ $dataj->nama_kk }}<
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Masuk Tanggal </th>
                <td  style="text-align: left;">{{ $dataj->terdaftarsejak_tgl }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Tempat Lahir </th>
                <td  style="text-align: left;">{{ $dataj->tl }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Tanggal Lahir</th>
                <td  style="text-align: left;">{{ $dataj->tanggal_l }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Nomor Telepon </th>
                <td  style="text-align: left;">{{ $dataj->no_telpon }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Status Perkawinan </th>
                <td  style="text-align: left;">{{ $dataj->status_p }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Nama Lengkap </th>
                <td  style="text-align: left;">{{ $dataj->nama_lengkap }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Jenis Kelamin </th>
                <td  style="text-align: left;">{{ $dataj->jk }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">TST</th>
                <td  style="text-align: left;">{{ $dataj->tst }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Ttl Penyeraan Anak </th>
                <td  style="text-align: left;">{{ $dataj->tgl_penyeraan_a }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">No PA </th>
                <td  style="text-align: left;">{{ $dataj->no_pa }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Dilayani Oleh </th>
                <td  style="text-align: left;">{{ $dataj->dilayani_oleha }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Gereja Penyeraan Anak</th>
                <td  style="text-align: left;">{{ $dataj->gereja_pa }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Tanggal Baptis</th>
                <td  style="text-align: left;">{{ $dataj->tgl_baptis }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Nomor Baptis Selam</th>
                <td  style="text-align: left;">{{ $dataj->no_bs }}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Dilayani Oleh</th>
                <td  style="text-align: left;">{{ $dataj->dilayani_olehb }}<
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Dilayani Oleh Baptis Selam</th>
                <td  style="text-align: left;">{{ $dataj->gereja_bs }}<
            </tr>

            
            <tr class="text-center">
                <th style="text-align: left;">Tanggal Pernikaan</th>
                <td  style="text-align: left;">{{ $dataj->tgl_pernikaan }}<
            </tr>

            
            <tr class="text-center">
                <th style="text-align: left;">Nomor Pernikaan</th>
                <td  style="text-align: left;">{{ $dataj->no_pn }}<
            </tr>
            
            <tr class="text-center">
                <th style="text-align: left;">Dilayani Oleh</th>
                <td  style="text-align: left;">{{ $dataj->dilayani_olehc}}<
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Gereja Per</th>
                <td  style="text-align: left;">{{ $dataj->gereja_per}}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Beribada di Cabang</th>
                <td  style="text-align: left;">{{ $dataj->brb_c}}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Mengikuti Fa</th>
                <td  style="text-align: left;">{{ $dataj->mengikuti_fa}}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Nomor Fa</th>
                <td  style="text-align: left;">{{ $dataj->no_fa}}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Melayani</th>
                <td  style="text-align: left;">{{ $dataj->melayani}}</td>
            </tr>

            <tr class="text-center">
                <th style="text-align: left;">Bidang</th>
                <td  style="text-align: left;">{{ $dataj->bidang}}</td>
            </tr>

    </table>
@endsection
