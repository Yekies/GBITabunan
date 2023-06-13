@extends('layout.home')
@section('content')

<form action="{{ route('dataj.store') }}" method="POST">
    @csrf

            <div class="alert alert-warning text-center">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nomor KAJ:</label>
                        <input type="number" name="no_kaj" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Masuk Tanggal:</label>
                        <input type="date" name="masuk_tanggal" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor NIK:</label>
                        <input type="text" name="nik" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Alamat Lengkap:</label>
                        <input type="text" name="alamat_lengkap" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telpon" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-12">
              <div class="form-group">
                        <label>Status Perkawinan  :</label>
                        <select class="form-control" name="status_p">
                            <option>Pilih</option>
                            <option value="Belum Menika">Belum Menika</option>
                            <option value="Menika">Menika</option>
                            <option value="Janda/Duda">Janda/Duda</option>
                            <option value="Carai/Pisah">Carai/Pisah</option>
                        </select>
                    </div>  
              </div>
            </div><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn-sm btn btn-primary">Submit</button>
                <a class="btn-sm btn btn-secondary" href="{{ route('dataj.index') }}">Kembali</a>   
            </div><br>
            <i><center><b class="text-center">Kerohanian</b></center></i><hr>

        </form>
@endsection

