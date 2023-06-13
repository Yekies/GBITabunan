@extends('layout.home')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<a class="btn btn-primary btn-sm" href="{{ url('programkerja/create') }}"> Tambah</a>
<a href="{{ url('programkerja/export-pdf') }}" class="btn btn-lg btn-success btn-sm">Download PDF</a><br><br>
<div class="table table-bordered">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Program</th>
                        <th>Tujuanp</th>
                        <th>waktu</th>
                        <th  width="400px">keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($program as $dt)
                        <tr>
                            <td>{{ $dt->program }}</td>
                            <td>{{ $dt->tujuanp }}</td>
                            <td>{{ $dt->waktu }}</td>
                            <td>{{ $dt->keterangan }}</td>
                        <td>
                        <form action="{{ route('programkerja.destroy',$dt->id) }}" method="POST">
                            <a class="btn btn-success btn-sm" href="{{ route('programkerja.edit',$dt->id) }}">Edit</a>
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