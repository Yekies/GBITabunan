@extends('layout.home')
@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
        <form action="{{ route('jadwal.store') }}" method="POST">
            @csrf
        
                    <div class="text-center">
                        <h5 class="text-center">Jadwal Kegiatan</h5><hr>    
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                            <strong>Nama Kegiatan: </strong>
                            <input type="text" name="nama_kegiatan" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                            <strong>Tanggal Pelaksanaan: </strong>
                            <input type="text" name="tanggal" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Waktu Pelaksanaan: </strong>
                                <input type="time" name="waktu" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Tempat Pelaksanaan: </strong>
                                <input type="text" name="tempat" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn-sm btn btn-primary">Submit</button>
                    </div><br>
                  
                </form>
    </div>
</div>
</div>

@endsection

