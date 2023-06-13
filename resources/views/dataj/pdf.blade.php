<style>
	.horizontal_center{
     /*mengatur border bagian atas tag div */
	   border-top: 6px solid black;
     /* mengatur tinggi tag div*/
     height: 2px;
     /*mengatur lebar tag div*/
     width : 100%;
    }
	</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Data Jemaat </h2>
                <img src="/img/logo.png" height="120" width="120" style="border-radius:30px">
                <h1>Selamat Datang di GBI (Gereja Betel Indonesia), Jemaat Tambunan</h1>
                <div class="text-center"><br>
                    <div class="preloader flex-column justify-content-center align-items-center">
                      </div><br><br>
                    <h2>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </h2>
                </div>
                <div class="horizontal_center"></div>
            </div>
        </div>
    </div>
@foreach ($dataj as $tampil)
<table class="table table-sm " style="width: 800px;">
    <tr class="text-center">
        <th  style="text-align: left;">No </th>
        <td  style="text-align: left;">{{ $tampil->id }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">Nomor KAJ </th>
        <td  style="text-align: left;">{{ $tampil->no_kaj }}</td><br>
    </tr>


    <tr class="text-center">
        <th style="text-align: left;">Masuk Tanggal </th>
        <td  style="text-align: left;">{{ $tampil->masuk_tanggal }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">Nama Lengkap </th>
        <td  style="text-align: left;">{{ $tampil->nama_lengkap }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">No / NIK </th>
        <td  style="text-align: left;">{{ $tampil->nik }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">Tempat Lahir </th>
        <td  style="text-align: left;">{{ $tampil->tempat_lahir }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">Tanggal Lahir </th>
        <td  style="text-align: left;">{{ $tampil->tanggal_lahir }}</td><br>
    </tr>


    <tr class="text-center">
        <th style="text-align: left;">Jenis Kelamin </th>
        <td  style="text-align: left;">{{ $tampil->jk }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">Alamat Lengkap </th>
        <td  style="text-align: left;">{{ $tampil->alamat_lengkap }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">Nomor Telepon </th>
        <td  style="text-align: left;">{{ $tampil->no_telpon }}</td><br>
    </tr>

    <tr class="text-center">
        <th style="text-align: left;">Status Perkawinan </th>
        <td  style="text-align: left;">{{ $tampil->status_p }}</td><br>
    </tr>
</table><br>
@endforeach
<!-- ./wrapper -->
