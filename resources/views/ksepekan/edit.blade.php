@extends('layout.home')
@section('content')
<div class="card">
    <form action="{{ route('ksepekan.update',$ksepekan->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="text-center">
            <h5>Kegiatan Jadwal</h5><hr>
        </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Nama Kegiatan: </strong>
                    <input type="text" name="nama_kegiatan"  value="{{ $ksepekan->nama_kegiatan }}"    class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Tanggal Pelaksanaan: </strong>
                    <input type="text" name="tanggal" value="{{ $ksepekan->tanggal }}" class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Waktu Pelaksanaan: </strong>
                    <input type="time" name="waktu" value="{{ $ksepekan->waktu }}" class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Tempat Pelaksanaan: </strong>
                    <input type="text" name="tempat" value="{{ $ksepekan->tempat }}" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn-sm btn btn-primary">Submit</button>
        </div>
    </form>
</div>

</div>
@endsection

