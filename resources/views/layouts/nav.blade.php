<div class="container">
    <img class="animation__shake" src="/img/logo.png" alt="AdminLTELogo" height="60" width="60" style="border-radius:30px;"><a class="navbar-brand text-brand" href="{{ url('tampilprofil') }}" style="font-size: 20px">&nbsp; <span style="color: rgb(0, 0, 255)">GBI</span><span class="color-b text-light">Tambunan</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ url('tampilprofil') }}" style="font-size: 15px">Beranda</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px">Tentang Gereja</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="{{ url('userstrukturor') }}">Struktur Organisasi</a>
              <a class="dropdown-item " href="{{ url('userprogramkerja') }}">Program Kerja</a>
              <a class="dropdown-item " href="{{url('usersejarah')}}">Sejara Gereja</a>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-light" href="{{url('userrenungan')}}" style="font-size: 15px">Renungan  </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="{{ url('userlive') }}" style="font-size: 15px">Ibadah Online</a>
          </li> 

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px">Data Gereja</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="{{ url('userkeuangan') }}">Keuangan</a>
              <a class="dropdown-item " href="{{ url('userjadwal') }}">Jadwal Kegiatan</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px">Galeri</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="{{url('http://localhost:8000/usergambar')}}">Foto</a>
              <a class="dropdown-item " href="{{ url('uservideo') }}">Video</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="{{ url('http://localhost:8000/') }}" style="font-size: 15px">Masuk</a>
          </li>
        </ul>
      </div>
    </div>