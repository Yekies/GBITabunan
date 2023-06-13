@extends('layout.home')
@section('content')
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
                <a class="btn-sm btn btn-primary" href="{{ route('video.create') }}">Tambah</a><br><br>
        <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Description</th>
            <th>Video</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($video as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->judul }}</td>
            <td>{{ $product->desk }}</td>
            <td>
            <video width="220" height="140" controls>
                <source src="{{ asset($product->path) }}" type="video/mp4">
            </video>
            </td>
            <td>
                <form action="{{ route('video.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-success btn-sm " href="{{ route('video.edit',$product->id) }}">Edit</a>
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