@extends('layout.home')
@section('content')
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
    <a class="btn-sm btn btn-primary" href="{{ route('live.create') }}">Tambah</a><br><br>
   
    <table class="table table-bordered">
    <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Tema</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Tempat</th>
            <th>Link</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->judul }}</td>
            <td>{{ $product->tema }}</td>
            <td>{{ $product->hari }}</td>
            <td>{{ $product->tanggal }}</td>
            <td>{{ $product->waktu }}</td>
            <td>{{ $product->tempat }}</td>
            <td><a href='{{ $product->link }}'>{{ $product->link }}</a></td>
            <td>
                <form action="{{ route('live.destroy',$product->id) }}" method="POST">  
                    <a class="btn btn-success btn-sm " href="{{ route('live.edit',$product->id) }}">Edit</a>

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