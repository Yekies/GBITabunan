@extends('layout.home')
@section('content')
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <!-- <h2>Laravel 8 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2> -->
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{ route('profile.create') }}">Tambah</a>
            </div>
        </div>
    </div><br>
    @if ($message = Session::get('success'))

        <div class="alert alert-success" style="height: 50px;">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Sambutan</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($profile as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->sabuntan }}</td>
            <td>{{ $product->desk }}</td>
            <td><img src="/gambar/{{ $product->gambar }}" width="100px"></td>
            <td>
                <form action="{{ route('profile.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info btn-sm"href="{{ route('profile.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-success btn-sm" href="{{ route('profile.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm  ">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>        
@endsection