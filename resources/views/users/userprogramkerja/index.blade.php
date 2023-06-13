@extends('layouts.home')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <p class="text-center" style="font-size: 28px">Program Kerja</p><hr>
                    <div class="card">
                        <div class="card-body">	<table class='table table-bordered'>
                            <thead>
                                <tr>
                                    <a href="{{ url('programkerja/export-pdf') }}" class="btn btn-lg btn-success btn-sm"> 
                                        <span class="glyphicon glyphicon-download-alt"> Download</span> 
                                    </a><br><br>
                                </tr>
                                <tr>
                                    <th>Program</th>
                                    <th>Tujuan</th>
                                    <th>Waktu</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userprogramkerja as $dt)
                                    <tr>
                                        <td>{{ $dt->program }}</td>
                                        <td>{{ $dt->tujuanp }}</td>
                                        <td>{{ $dt->waktu }}</td>
                                        <td>{{ $dt->keterangan }}</td>
                                    </tr>
                            </tbody>
                          @endforeach
                          </table>
                        </div><br>
                    </div><br>
                </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div class="container"> 
@endsection




