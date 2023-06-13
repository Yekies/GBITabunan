@extends('layout.home')
@section('content')
<div class="container">
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
        <a class="btn-sm btn btn-primary" href="{{ route('foto.create') }}">Tambah</a><br><br>
    <table class="table table-bordered">
    <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Isi Firman</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($foto as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{!! \Str::limit($product->isi,300) !!}</td>
            <td>
                <form action="{{ route('foto.destroy',$product->id) }}" method="POST">
      
                    <a class="btn-sm btn btn-success" href="{{ route('foto.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn-sm btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection


