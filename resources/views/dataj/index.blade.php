@extends('layout.home')     
@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="row">
    <div class="col-12 col-md-4 d-flex mt-md-0 mb-4" >
    <div class="col-12 shadow-sm p-4 rounded" style="background-color:#F9FFFF;">
    <div class="col-12 d-flex">
        <div class="col-7">
            <span>JUMLAH JEMAAt</span>
        </div>
        <div class="col-5 rounded  d-flex justify-content-end">
            <div class="rounded-circle bg-info d-flex align-items-center justify-content-center"
                style="width: 60px;height:60px;">
                <i class="fa fa-users text-white fs-3"></i>
            </div>
        </div>
    </div>
    <div class="col-12">
        <span class="fs-3 fw-bold">{{ $dataj->count(); }}</span>
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
            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
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
            <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center"
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

<div class="card card-default">
    <div class="card-header">
        <form action="{{ route('dataj.search') }}" method="GET" class="form-inline">
            <div class="form-group mr-1">
                <input class="form-control form-control-sm" type="text" name="search" placeholder="Search...">
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-default btn-sm" type="submit">search</i></button>
            </div>  
            <div class="form-group mr-1">
                <a class="btn-sm btn btn-primary" href="{{ route('dataj.create') }}">Tambah</a>
            </div>
        </form> <br>
   
    <table class="table table-bordered">
    <tr>
            <th>#</th>
            <th>No-KAJ</th>
            <th>Nama Lengkap</th>    
            <th>No-Telpon</th>
            <th>Jenis Kelamin</th>
            <th>gambar</th>
            <th colspan="2">Aksi/Action
            </th>
        </tr>
        @foreach ($dataj as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->id_anak }}</td>
                <td>{{ $product->nama_lengkap}}</td>
                <td>{{ $product->no_telpon }}</td>
                <td>{{ $product->jk }}</td>
                <td><img src="/gambar/{{ $product->gambar }}" width="100px"></td>
                <td>
                    <form action="{{ route('dataj.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info btn-sm " href="{{ route('dataj.show',$product->id) }}">show</a>
                    <a class="btn btn-success btn-sm " href="{{ route('dataj.edit',$product->id) }}"><i class="fas fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></button>
                    <a class="btn btn-default btn-sm " href="{{ route('dataj.show',$product->id) }}"><span class="glyphicon glyphicon-download-alt"></span> PDF</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
</div>
</div>
@endsection