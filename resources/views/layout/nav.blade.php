<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('homeadmin')}}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Tentang Gereja
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('strukturor')}}" class="nav-link">
                  <p>Struktur Oroganisasi</p>
                </a>
              </li>
            </ul>



            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('programkerja')}}" class="nav-link">
                  <p>Program Kerja</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('sejarah')}}" class="nav-link">
                  <p>Sejarah Gereja</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item">
            <a href="{{ url('renungan') }}" class="nav-link">
              <i class="fa-thin fa-person-praying"></i>
              <p>
                Renungan Harian
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('live')}}" class="nav-link">
              <p>
               Ibadah Online
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Data Gereja
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('keuangan')}}" class="nav-link">
                  <p>Keuangan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('jadwal')}}" class="nav-link">
                  <p>Jadwal Kegiatan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('pelayan')}}" class="nav-link">
              <p>
               Pelayanan
              </p>
            </a>
          </li>
          
  <!-- Gallery -->
       <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('foto')}}" class="nav-link">
                  <p>Foto</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('video')}}" class="nav-link">
                  <p>Video</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('Datajemaat')}}" class="nav-link">
              <p>
               Data Jemaat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Menegelola data Utama
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('profile')}}" class="nav-link">
                  <p>Kata Sambutan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('beritah')}}" class="nav-link">
                  <p>Berita</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('ksepekan')}}" class="nav-link">
                  <p>Kegiatan Sepekan</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('jadwalibadah')}}" class="nav-link">
                  <p>Jadwal Ibadah</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('jadwalibadah')}}" class="nav-link">
                  <p>Profile Gembala</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('karausel')}}" class="nav-link">
                  <p>Foto karausel</p>
                </a>
              </li>
            </ul>
          </li>          

          <li class="nav-item">
            <a href="{{url('http://localhost:8000/berasil')}}" class="nav-link">
              <p>
               Masuk Halaman user
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('#')}}" class="nav-link">
              <p>
               Masuk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/register" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Register admin
              </p>
            </a>
          </li>
        </ul>