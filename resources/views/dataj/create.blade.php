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
<form action="{{ route('dataj.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

            <div class="text-center">
                <h5>Membuat Data Jemaat Baru</h5>
            </div><hr>  
            <i><center><b class="text-center">Kerohanian</b></center></i><hr>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>ID Anak:</label>
                        <input type="text" name="id_anak" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Terdaftar Sejak Tgl:</label>
                        <input type="date" name="terdaftarsejak_tgl" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Foto:</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tl" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_l" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                         <input type="radio" name="jk" value="Laki-laki" class="form-control" style="width: 20px;height: 20px" /> 
                         Laki - Laki
                         |<input type="radio" name="jk" value="Perempuan" class="form-control" style="width: 20px;height: 20px" /> 
                         Perempuan
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alamat Lengkap:</label>
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Telepon:</label>
                        <input type="text" name="no_telpon" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Status Perkawinan:</label>
                        <select class="form-control" name="status_p">
                            <option>Pilih</option>
                            <option value="1">Sudah Kawain</option>
                            <option value="2">Belum Kawain</option>
                        </select>
                    </div>
                </div>
            </div>

            <h2>Kerohanian</h2><hr>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Penyeraan Anak:</label>
                        <input type="date" name="tgl_penyeraan_a" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Dilayani Oleh:</label>
                        <input type="text" name="dilayani_oleha" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Pa:</label>
                        <input type="text" name="no_pa" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Gereja:</label>
                        <input type="text" name="gereja_pa" class="form-control">
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Baptisan Selam:</label>
                        <input type="date" name="tgl_baptis" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Dilayani Oleh:</label>
                        <input type="text" name="dilayani_olehb" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Bs:</label>
                        <input type="text" name="no_bs" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Gereja:</label>
                        <input type="text" name="gereja_bs" class="form-control">
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Pernikaan:</label>
                        <input type="date" name="tgl_pernikaan" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Dilayani Oleh:</label>
                        <input type="text" name="dilayani_olehc" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Pn:</label>
                        <input type="text" name="no_pn" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Gereja:</label>
                        <input type="text" name="gereja_per" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>Beribadah di Cabang:</label>
                    <input type="text" name="brb_c" class="form-control">
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Menggikuti Fa:</label>
                        <select class="form-control" name="mengikuti_fa">
                            <option>Pilih</option>
                            <option value="2">Belum</option>
                            <option value="1">Sudah</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nomor Fa:</label>
                        <input type="text" name="no_fa" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Melayani:</label>
                        <select class="form-control" name="melayani">
                            <option>Pilih</option>
                            <option value="2">Belum</option>
                            <option value="1">Sudah</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Bidang:</label>
                        <input type="text" name="bidang" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Kaka:</label>
                        <input type="text" name="nama_kk" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama Kaka:</label>
                        <input type="text" name="tst" class="form-control">
                    </div>
                </div>
            </div>
            </div>
           
           
                <div class="col-sm-4">
                    <button type="submit" class="btn-sm btn btn-primary">Kirim</button>
                </div>

          
        </form>
@endsection

