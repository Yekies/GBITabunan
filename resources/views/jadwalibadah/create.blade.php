@extends('layout.home')
@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
        <form action="{{ route('jadwalibadah.store') }}" method="POST">
            @csrf
                    <div class="text-center">
                        <h5 class="text-center">Jadwal Ibadah</h5><hr>    
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">     
                            <strong>Nama Ibadah : </strong>
                            <input type="text" name="nama_ibadah" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                            <strong>Pengkhotbah: </strong>
                            <input type="text" name="pengkhotbah" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                            <strong>Jenis   Ibadah: </strong>
                            <input type="text" name="jenis_ibadah" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Waktu : </strong>
                                <input type="time" name="waktu" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Tanggal : </strong>
                                <input type="date" name="tanggal" class="form-control">
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

