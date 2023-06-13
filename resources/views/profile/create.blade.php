@extends('layout.home')
@section('content')
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h5 class="text-center">Struktur Organisasi</h5><hr>
        </div>
    </div>
</div>
     
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
     
<form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sambutan : </strong>
                <input type="text" name="sabuntan" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi : </strong>
                <textarea class="form-control" style="height: 150px;px" name="desk"></textarea>
                <!-- <textarea class="form-control" style="height:150px" name="isian" placeholder="Isian"></textarea> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <input type="file" name="gambar" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <button type="submit" class="btn-sm btn btn-primary">Kirim</button>
        </div><br>
    </div>
    </div>
</form>
@endsection