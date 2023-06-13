@extends('layout.home')
@section('content')
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card">
    <div class="card-header">
        <div class="tab-content" id="myTabContent">
                <h4>Selamat Datang</h4>
                 <table id="w0" class="table table-condensed detail-view" style="width: 100%">
                    <tr class="text-center">
                        <th>gambar : </th>
                        <td><img src="/gambar/{{ $anak->gambar }}" width="100px"></td>
                    </tr>
                        <tr class="text-center">
                            <th  style="text-align: left;">No </th>
                            <td  style="text-align: left;">{{ $anak->id }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor KAJ </th>
                            <td  style="text-align: left;">{{ $anak->id_dewasa}}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Nama Kk </th>
                            <td  style="text-align: left;">{{ $anak->nama_kk }}
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Masuk Tanggal </th>
                            <td  style="text-align: left;">{{ $anak->terdaftarsejak_tgl }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Tempat Lahir </th>
                            <td  style="text-align: left;">{{ $anak->tl }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Tanggal Lahir</th>
                            <td  style="text-align: left;">{{ $anak->tanggal_l }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Telepon </th>
                            <td  style="text-align: left;">{{ $anak->no_telpon }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Status Perkawinan </th>
                            <td  style="text-align: left;">{{ $anak->status_p }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Nama Lengkap </th>
                            <td  style="text-align: left;">{{ $anak->nama_lengkap }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Jenis Kelamin </th>
                            <td  style="text-align: left;">{{ $anak->jk }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">TST</th>
                            <td  style="text-align: left;">{{ $anak->tst }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Ttl Penyeraan Anak </th>
                            <td  style="text-align: left;">{{ $anak->tgl_penyeraan_a }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">No PA </th>
                            <td  style="text-align: left;">{{ $anak->no_pa }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh </th>
                            <td  style="text-align: left;">{{ $anak->dilayani_oleha }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Gereja Penyeraan Anak</th>
                            <td  style="text-align: left;">{{ $anak->gereja_pa }}</td>
                        </tr>   
                        <tr class="text-center">
                            <th style="text-align: left;">Tanggal Baptis</th>
                            <td  style="text-align: left;">{{ $anak->tgl_baptis }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Baptis Selam</th>
                            <td  style="text-align: left;">{{ $anak->no_bs }}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh</th>
                            <td  style="text-align: left;">{{ $anak->dilayani_olehb }}<
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh Baptis Selam</th>
                            <td  style="text-align: left;">{{ $anak->gereja_bs }}<
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Tanggal Pernikaan</th>
                            <td  style="text-align: left;">{{ $anak->tgl_pernikaan }}<
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Pernikaan</th>
                            <td  style="text-align: left;">{{ $anak->no_pn }}<
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Dilayani Oleh</th>
                            <td  style="text-align: left;">{{ $anak->dilayani_olehc}}<
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Gereja Per</th>
                            <td  style="text-align: left;">{{ $anak->gereja_per}}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Beribada di Cabang</th>
                            <td  style="text-align: left;">{{ $anak->brb_c}}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Mengikuti Fa</th>
                            <td  style="text-align: left;">{{ $anak->mengikuti_fa}}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Nomor Fa</th>
                            <td  style="text-align: left;">{{ $anak->no_fa}}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Melayani</th>
                            <td  style="text-align: left;">{{ $anak->melayani}}</td>
                        </tr>
                        <tr class="text-center">
                            <th style="text-align: left;">Bidang</th>
                            <td  style="text-align: left;">{{ $anak->bidang}}</td>
                        </tr>
                 </table>
                </div>
            </div>
@endsection

