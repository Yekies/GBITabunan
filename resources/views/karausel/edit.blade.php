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
    
    <form action="{{ route('karausel.update',$karausel->id)}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
            <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <input type="text" name="desk" value="{{ $karausel->desk }}" class="form-control">
            </div>

             <div class="form-group">
                 <strong>Gambar:</strong>
                 <input type="file" name="gambar" class="form-control" placeholder="Gambar">
                 <td><img src="/gambar/{{ $karausel->gambar }}" width="100px"></td>
         </div>
              <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
        </div>  
    </form>
@endsection
