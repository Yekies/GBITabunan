@extends('layout.home')
@section('content')

        <a class="btn btn-primary btn-sm" href="{{ url('ksepekan/create') }}"> Tambah</a><br><br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ksepekan as $dt)
                        <tr>
                            <td>{{ $dt->nama_kegiatan }}</td>
                            <td>{{ $dt->tanggal }}</td>
                            <td>{{ $dt->waktu }}</td>
                            <td>{{ $dt->tempat }}</td>
                        <td>
                        <form action="{{ route('ksepekan.destroy',$dt->id) }}" method="POST">
                            <a class="btn btn-success btn-sm" href="{{ route('ksepekan.edit',$dt->id) }}">Edit</a>
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