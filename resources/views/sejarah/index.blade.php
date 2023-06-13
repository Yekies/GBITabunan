@extends('layout.home')
@section('content')
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
    <a class="btn-sm btn btn-primary" href="{{ route('sejarah.create') }}">Tambah</a><br><br>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sejarah as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->judul }}</td>
            <td>{{ $product->isi }}</td>
            <td><img src="/gambar/{{ $product->gambar }}" width="100px"></td>
            <td>
                <form action="{{ route('sejarah.destroy',$product->id) }}" method="POST">
                    <a class="btn-sm btn btn-info" href="{{ route('sejarah.show',$product->id) }}">Show</a>
                    <a class="btn-sm btn btn-success" href="{{ route('sejarah.edit',$product->id) }}">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $sejarah->links() !!}
    </div>
</div>
@endsection