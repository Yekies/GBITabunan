@extends('layouts.home')
@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="text-center"><strong>Data Keuanggan Gereja</strong></h4><hr>
                        <div class="card-body">	<table class='table table-bordered'>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <h4>Data Pemasukan Gereja</h4>
                                <hr>
                                <tbody>
                                    @foreach($pemasukan1 as $p)
                                    <tr>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td>Rp.{{ $p->jumlah }} </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td><strong>Total Pemasukan</strong></td>
                                        <td colspan="2"><strong>Total Pemasukan : {{  $pemasukan }}</strong></td>
                                    </tr>
                                </tbody>    
                                </tbody>
                            
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <h4>Data Pengeluaran Gereja</h4>
                                <hr>
                                <tbody>
                                    @foreach($pengeluaran1 as $p)
                                    <tr>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td>Rp.{{ $p->jumlah }} </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td><strong>Total Pengeluaran</strong></td>
                                        <td><strong>Total Pengeluaran: Rp.{{  $pengeluaran }}</strong></td>            
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>Total saldo</strong></td>
                                        <td><strong>Sisa Saldo: Rp.{{ $saldo }}</strong></td>            
                                    </tr>
                            </table>

                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection









