@extends('layout.home')
@section('content')

<div class="container">
    @if ($message = Session::get('success'))

    <div class="alert alert-success" style="height: 50px;">
        <p>{{ $message }}</p>
    </div>
@endif
<a class="btn btn-primary btn-sm" href="{{ route('strukturor.create') }}">Tambah</a><br><br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th width="280px">Tindakan</th>
    </tr>       
    @foreach ($struktur as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->judul }}</td>
        <td>{{ $product->desk }}</td>
        <td><img src="/gambar/{{ $product->gambar }}" width="100px"></td>
        <td>
            <form action="{{ route('strukturor.destroy',$product->id) }}" method="POST">
                <a class="btn btn-success btn-sm" href="{{ route('strukturor.edit',$product->id) }}">Edit</a>
 
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm  ">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> 

</div>     
@endsection
