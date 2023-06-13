@extends('layout.home')
@section('content')

            <h5 class="text-center">Data Pelayanan</h5><hr>

     
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
     
<form action="{{ route('pelayan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIK:</strong>
                <input type="text" name="nik" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Peran:</strong>
                <input type="text" name="pran" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Terima Jabatan:</strong>
                <input type="date" name="tgl_trm_jbtn" class="form-control">
                <!-- <textarea class="form-control" style="height:150px" name="isian" placeholder="Isian"></textarea> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Akhir Jabatan:</strong>
                <input type="date" name="tgl_akhir_jbtn" class="form-control">
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
        </div>
    </div>
    </div>
</form>
@endsection