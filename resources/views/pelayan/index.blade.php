@extends('layout.home')
@section('content')

    @if ($message = Session::get('success'))

        <div class="alert alert-success" style="height: 50px;">
            <p>{{ $message }}</p>
        </div>
    @endif
    <form action="{{ url('pelayan') }}" method="GET" class="form-inline">

        <div class="form-group mr-1">
            <input class="form-control form-control-sm" type="text" name="search" placeholder="Search...">
        </div>
        <div class="form-group mr-1">
            <button class="btn btn-default btn-sm" type="submit">search</i></button>
        </div>  
        <div class="form-group mr-1">
            <a class="btn-sm btn btn-primary" href="{{ route('pelayan.create') }}">Tambah</a>
        </div>
    </form> <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Pran</th>
            <th>Tanggal Terima Jabatan</th>
            <th>Tanggal Akhir Jabatan</th>
            <th>Gambar</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($pelayanan as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nik }}</td>
            <td>{{ $product->pran }}</td>
            <td>{{ $product->tgl_trm_jbtn }}</td>
            <td>{{ $product->tgl_akhir_jbtn }}</td>
            <td><img src="/gambar/{{ $product->gambar }}" width="100px"></td>
            <td>
                <form action="{{ route('pelayan.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-success btn-sm" href="{{ route('pelayan.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-sm btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection