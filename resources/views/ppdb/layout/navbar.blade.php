<header id="header" class="header sticky-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{ asset('assets/images/logo.png') }}" alt="">
      <h1> Estibaja</h1>
      <span>.</span>
    </a>
      <!-- Nav Menu -->
      @if (auth()->check())
      <nav id="navmenu" class="navmenu">
        <ul>
          {{-- jika sudah login --}}
          <li><a href="/dashboard-ppdb-siswa">Dashboard</a></li>
          <li><a href="/formulir-ppdb">Biodata Saya</a></li>
          <li class="dropdown has-dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i
                class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>

            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Nav Menu -->
      @else
      <div class="d-flex justify-content-end align-items-center gap-3">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/">Home</a></li>
          </ul>
        </nav>
        <!-- End Nav Menu -->
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        <div class="button">
          <a class="btn-getstarted" href="/login">Sign in</a></li>
        </div>
      </div>
     
      @endif

</header>