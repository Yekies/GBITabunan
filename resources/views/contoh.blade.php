@extends('layout.home')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

    <div class="row">
        <div class="col-12">
            <table id="w0" class="table table-condensed detail-view"><tr><th>Status Akhir</th><td>Aktif</td></tr>
                <tr><th>Angkatan</th><td>2020</td></tr>
                <tr><th>User Name</th><td>if420021</td></tr>
                <tr><th>Email  Akademik</th><td>if420021@students.del.ac.id</td></tr>
                <tr><th>Program  Studi</th><td>DIV Sarjana Terapan Teknologi Rekayasa Perangkat Lunak</td></tr>
                <tr><th>Kelas</th><td>43TRPL3</td></tr>
                <tr><th>Wali  Mahasiswa</th><td>Dr. Arnaldo Marulitua Sinaga, ST., M.InfoTech.</td></tr>
                <tr><th>Jalur  Usm</th><td>USM 2A</td></tr></table>
        </div>
    </div>
    </div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">TTTTTTTTTTTTTTTT</div>
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">TTTTTTTTTTTTTTTT</div>
    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">TTTTTTTTTTTTTTTT</div>
  </div>


  <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Pukul</th>
            <th scope="col">Nama Kegiatan</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>11 August 2022</td>
                <td>15:00:34</td>
                <td>Ina Kamis</td>
            </tr>
                                    <tr>
                <td>10 August 2022</td>
                <td>18:00:35</td>
                <td>Gemende Koor Siloam</td>
            </tr>
                                    <tr>
                <td>15 August 2022</td>
                <td>18:00:19</td>
                <td>Ina Ester</td>
            </tr>
                                    <tr>
                <td>13 August 2022</td>
                <td>19:00:00</td>
                <td>PP-Remaja</td>
            </tr>
                                    <tr>
                <td>12 August 2022</td>
                <td>19:00:00</td>
                <td>Ama Samuel</td>
            </tr>
                            </tbody>
</table>
@endsection

