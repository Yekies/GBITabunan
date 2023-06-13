@extends('layout.home')
@section('content')     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('karausel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

            <div class="form-group">
                <strong>Deskripsi:</strong>
                <input type="text" name="desk" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="gambar" class="form-control" placeholder="image">
        </div>
                <button type="submit" class="btn-sm btn btn-primary">Kirim</button>
        </div>
    </div>
     
</form>
@endsection