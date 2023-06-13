@extends('layout.home')
@section('content')

        <a class="btn btn-primary btn-sm" href="{{ route('jadwalibadah.create') }}"> Tambah</a><br><br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Ibadah</th>
                        <th>Jenis Ibadah</th>
                        <th>Pengkhotbah</th>
                        <th>Waktu</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>        
         
                </thead>
                <tbody>
                    @foreach ($jadwalIbadah as $dt)
                        <tr>
                            <td>{{ $dt->nama_ibadah }}</td>
                            <td>{{ $dt->jenis_ibadah }}</td>
                            <td>{{ $dt->pengkhotbah }}</td>
                            <td>{{ $dt->waktu }}</td>
                            <td>{{ $dt->tanggal }}</td>
                        <td>
                            <form action="{{ route('jadwalibadah.destroy',$dt->id) }}" method="POST">
                                <a class="btn btn-success btn-sm" href="{{ route('jadwalibadah.edit',$dt->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    
                                </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection