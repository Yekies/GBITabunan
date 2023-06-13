@extends('layouts.home')
@section('content')
<div class="container">
    <h4 class="text-center">Jadwal Kegiatan</h4><hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Taggal / Waktu</th>
                                <th>Tempat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userjadwal as $dt)
                                <tr>
                                    <td>{{ $dt->id }}</td>
                                    <td>{{ $dt->nama_kegiatan }}</td>
                                    <td>{{ $dt->tanggal }}/{{ $dt->waktu }}</td>
                                    <td>{{ $dt->tempat }}</td>
                                
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
       @endsection