@extends('layout.home')
@section('content')
<div class="card">
    <form action="{{ route('jadwalibadah.update',$jadwalIbadah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="text-center">   
            <h5>Jadwal Ibadah</h5><hr>    
        </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Nama Ibadah: </strong>
                    <input type="text" name="nama_ibadah"  value="{{ $jadwalIbadah->nama_ibadah }}"    class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Pengkhotbah : </strong>
                    <input type="text" name="pengkhotbah" value="{{ $jadwalIbadah->pengkhotbah }}" class="form-control">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Jenis Ibadah : </strong>
                    <input type="text" name="jenis_ibadah" value="{{ $jadwalIbadah->jenis_ibadah }}" class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Tanggal Pelaksanaan: </strong>
                    <input type="date" name="tanggal" value="{{ $jadwalIbadah->tanggal }}" class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Waktu Pelaksanaan: </strong>
                    <input type="time" name="waktu" value="{{ $jadwalIbadah->waktu }}" class="form-control">
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

