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
<form action="{{ route('dewasa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

            <div class="text-center">
                <h5>Membuat Data Jemaat Baru</h5>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <p>ID Ortu:</p>
                        <input type="text" name="id_ortu" class="form-control">
                    </div>
                </div>      
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <p>ID/:</p>
                        <input type="text" name="id" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Terdaftar Sejak Tgl:</p>
                        <input type="date" name="terdaftarsejak_tgl" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <p>Foto:</p>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <p>Nama Lengkap:</p>
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Tempat Lahir:</p>
                        <input type="text" name="tl" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <p>Tanggal Lahir:</p>
                        <input type="date" name="tanggal_l" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <p>Jenis Kelamin :</p>
                        <select class="form-control" name="jenis">
                            <option>Pilih</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Alamat Lengkap:</p>
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <p>Nomor Telepon:</p>
                        <input type="text" name="no_telpon" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <p>Status Perkawinan:</p>
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
                        <p>Tanggal Penyeraan Anak:</p>
                        <input type="date" name="tgl_penyeraan_a" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Dilayani Oleh:</p>
                        <input type="text" name="dilayani_oleha" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Nomor Pa:</p>
                        <input type="text" name="no_pa" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Gereja:</p>
                        <input type="text" name="gereja_pa" class="form-control">
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Tanggal Baptisan Selam:</p>
                        <input type="date" name="tgl_baptis" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Dilayani Oleh:</p>
                        <input type="text" name="dilayani_olehb" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Nomor Bs:</p>
                        <input type="text" name="no_bs" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Gereja:</p>
                        <input type="text" name="gereja_bs" class="form-control">
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Tanggal Pernikaan:</p>
                        <input type="date" name="tgl_pernikaan" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Dilayani Oleh:</p>
                        <input type="text" name="dilayani_olehc" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Nomor Pn:</p>
                        <input type="text" name="no_pn" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Gereja:</p>
                        <input type="text" name="gereja_per" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <p>Beribadah di Cabang:</p>
                    <input type="text" name="brb_c" class="form-control">
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Menggikuti Fa:</p>
                        <select class="form-control" name="mengikuti_fa">
                            <option>Pilih</option>
                            <option value="2">Belum</option>
                            <option value="1">Sudah</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Nomor Fa:</p>
                        <input type="text" name="no_fa" class="form-control">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Melayani:</p>
                        <select class="form-control" name="melayani">
                            <option>Pilih</option>
                            <option value="2">Belum</option>
                            <option value="1">Sudah</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <p>Bidang:</p>
                        <input type="text" name="bidang" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <p>TST:</p>
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

