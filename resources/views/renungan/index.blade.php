@extends('layout.home')
@section('content')
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

        <a class="btn-sm btn btn-primary" href="{{ route('renungan.create') }}">Tambah</a><br><br>
    <div class="card-body p-0 table-responsive">
   
    <table class="table table-bordered">
    <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Ayat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($renungan as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->tanggal}}</td>
            <td>{{ $product->judul }}</td>
            <td>{!! \Str::limit($product->isi,300) !!}</td>
            <td>{{ $product->ayat }}</td>
            <td>
                <form action="{{ route('renungan.destroy',$product->id) }}" method="POST">
   
                   

                    <a class="btn btn-success btn-sm " href="{{ route('renungan.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    </div>
</div>
@endsection