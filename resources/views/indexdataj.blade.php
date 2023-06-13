@extends('layout.home')     
@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="form-inline">
            <div class="form-group mr-1">
              Data Jemaat
            </div>
            <div class="form-group mr-1">
                <a class="btn-sm btn btn-primary" href="{{ route('dataj.create') }}">Tambah</a>
            </div>
    </div>
    <div class="card-body p-0 table-responsive">
   
    <table class="table table-bordered table-striped table-hover mb-0">
    <tr>
            <th>#</th>
            <th>No-KAJ</th>
            <th>Masuk tanggal</th>
            <th>Nama Lengkap</th>
            <th>No-NIK</th>
            <th>TempstL</th>
            <th>TanggalL</th>
            <th>JK</th>
            <th>AlamatL</th>
            <th>No-Telpon</th>
            <th>StatusP</th>
            <th colspan="2">Aksi/Action
            </th>
        </tr>
        @foreach ($dataj as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->no_kaj }}</td>
            <td>{{ $product->masuk_tanggal }}</td>
            <td>{{ $product->nama_lengkap}}</td>
            <td>{{ $product->nik }}</td>
            <td>{{ $product->tempat_lahir }}</td>
            <td>{{ $product->tanggal_lahir }}</td>
            <td>{{ $product->jk}}</td>
            <td>{{ $product->alamat_lengkap }}</td>
            <td>{{ $product->no_telpon }}</td>
            <td>{{ $product->status_p }}</td>
            <td>
                <form action="{{ route('dataj.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-success btn-sm " href="{{ route('dataj.edit',$product->id) }}"><i class="fas fa-edit"></i></a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      Jumlah umum {{ $dataj->count()}}
    </div>
</div>
@endsection