<header id="header" class="header sticky-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
        <h1> Estibaja</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="dropdown has-dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="/profile-sekolah">Profile Sekolah</a></li>
              <li><a href="/profile-guru">Profile Guru</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="/prestasi">Prestasi</a></li>
              <li><a href="/galery-kegiatan">Galery Kegiatan</a></li>
            </ul>
          </li>
          <li><a href="/kontak">Contact</a></li>
        </ul>
  
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="/register">PPDB</a>

    </div>
  </header><!-- End Header -->