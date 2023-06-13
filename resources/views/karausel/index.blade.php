@extends('layout.home')

@section('content')

                <a class="btn btn-sm btn-primary" href="{{ url('karausel/create') }}"> Tambah</a>

            <br><br>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif  
    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Gambar</th>


            <th>Deskripsi</th>

            <th width="280px">Action</th>
        </tr>

        @foreach ($karausel as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td><img src="/gambar/{{ $product->gambar }}" width="100px"></td>
            <td>{{ $product->desk }}</td>
           
            <td>

                <form action="{{ route('karausel.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-sm btn-success" href="{{ route('karausel.edit',$product->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>


@endsection