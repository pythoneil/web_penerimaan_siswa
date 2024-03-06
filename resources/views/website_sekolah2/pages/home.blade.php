@extends('website_sekolah2.layout.master')
@section('title', ' Home')

@section('content')
<!-- Hero Section - Home Page -->
<section id="hero" class="hero">

  <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="" data-aos="fade-in">

  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <span data-aos="fade-up" data-aos-delay="200">Welcome to</span>
        <h2 data-aos="fade-up" data-aos-delay="100">SMPN 3 BANJAHARJO</h2>
        <p data-aos="fade-up" data-aos-delay="100">SMP Negeri 3 Banjarharjo adalah siswa mampu menunjukkan
          peningkatan kuantitas dan kualitas perilaku dalam:
          beribadah dan beramal,
           menghargai orang lain dan menyampaikan sesuai dengan keadaan
          sebenarnya,
           prestasi akademik dan/atau non-akademik,
          cakap melakukan praktik hasil pembelajaran,
          umpan balik dalam kegiatan pembelajaran,
          menentukan pilihan sekolah lanjutan. </p>
      </div>
    </div>
  </div>

</section><!-- End Hero Section -->

<!-- Kepala Sekolah section -->
<section id="services" class="services">

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kepala Sekolah</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">
    @foreach ($kepalaSekolah as $item)
    <div class="row gy-5">
      <div class="col-xl-6">
        <div class="row gy-4 icon-boxes d-flex justify-content-center">
          <img src="/image/{{ $item->foto }}" alt=""
            style="width: auto; height:300px; border-radius:0; object-fit:contain;" height="auto">
        </div>
      </div>
      <div class="col-xl-6 content" data-aos="fade-left">
        <h5 class="fw-semibold">Sambutan</h5>
        <h3 class="fw-bold">{{$item->nama}}</h3>
        <p>{{$item->sambutan}}.</p>
      </div>
    </div>
    @endforeach

  </div>

</section><!-- End Services Section -->

<!-- About Section - Home Page -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-xl-center gy-5">

      <div class="col-xl-5 content">
        <h3>About Us</h3>
        <h2>Tentang </h2>
        <p>SMP Negeri 3 Banjarharjo terletak di desa Bandungsari Kecamatan Banjarharjo Kabupaten Brebes. 
          Proses penegriannya pada tahun 1988, ditandatangani oleh dinas Pendidikan Kabupaten Brebes. 
          SMP Negeri 3 Banjarharjo termasuk sebagai sekolah yang dipercaya oleh </p>
        <a href="/profile-sekolah" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="col-xl-7">
        <div class="row gy-4 icon-boxes d-flex justify-content-center">
          <img src="{{ asset('assets/images/logo.png') }}" alt=""
            style="width: auto; height:300px; border-radius:0; object-fit:contain;" height="auto">
        </div>
      </div>

    </div>
  </div>

</section><!-- End About Section -->


<!-- Services Section - Home Page -->
<section id="services" class="services">

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Fasilitas</h2>
    <p>Fasilitas yang tersedia di SMP Negri 3 Banjarharjo </p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-book"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Perpustakaan</a></h4>
            <p class="description">Perpustakaan SMP Negri 3 banjarharjo memiliki banyak kolesi buku untuk mendukung pembelajaran para siswa</p>
          </div>
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-lungs"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Lab. IPA</a></h4>
            <p class="description">SMP Negri 3 Banjarharjo memiliki lab untuk praktek mata pembelajaran Ilmu pengetahuan Alam yang mumpuni</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-display"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Lab. Komputer</a></h4>
            <p class="description">SMP Negri 3 Banjarharjo memiliki lab Komputer yang mumpuni untuk kegiatan pembelajaran siswa </p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-moon-stars"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Mushola</a></h4>
            <p class="description">SMP Negri 3 Banjarharjo memiliki musola untuk memfasilitasi para siswa muslim untuk beribadah yang dapat menampung banyak jamaah</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-shop"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Kantin Sehat</a></h4>
            <p class="description">SMP Negri 3 Banjarharjo memiliki kantin sehat yang mempunyai banyak pilihan makananan sehat </p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-dribbble"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Lap. Olahraga</a></h4>
            <p class="description">SMP Negri 3 Banjarharjo memiliki lapangan Olahraga yang cukup luas untuk menunjang bakat berolahraga siswa </p>
          </div>
        </div>
      </div>
      <!-- End Service Item -->

    </div>

  </div>

</section><!-- End Services Section -->


<!-- Team Section - Home Page -->
<section id="team" class="team">

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Daftar Guru</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-5">
      @foreach ($gurus as $guru)
      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
        <div class="member-img">
          <img src="/image/{{ $guru->foto }}" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>{{$guru->nama_guru}}</h4>
          <span>NIP: {{$guru->nip}}</span>
        </div>
      </div><!-- End Team Member -->

      @endforeach
    </div>

  </div>

</section><!-- End Team Section -->

<!-- Recent-posts Section - Home Page -->
<section id="recent-posts" class="recent-posts">

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Recent Posts</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      @foreach ($artikels as $artikel)
      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <article>

          <div class="post-img">
            <img src="/image/{{ $artikel->gambar }}" alt="" class="img-fluid">
          </div>

          <p class="post-category">Blogs</p>

          <h2 class="title">
            <a href="{{route('prestasi.detail', ['id' => $artikel->id]) }}">{{$artikel->judul}}</a>
          </h2>

          <div class="d-flex">
            <div class="post-meta">
              <p class="post-date">
                <time datetime="2022-01-01">{{date("d-m-Y", strtotime($artikel->created_at))}}</time>
              </p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->
      @endforeach

    </div><!-- End recent posts list -->

  </div>

</section><!-- End Recent-posts Section -->

<!-- Contact Section - Home Page -->
<section id="contact" class="contact">

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Desa Bandungsari</p>
              <p>RT / RW : 4 / 4</p>
              <p>Kecamatan : Kec. Banjarharjo

                Kabupaten : Kab. Brebes
                
                Provinsi : Prov. Jawa Tengah</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>02834582558</p>
                <p>082242642300</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>smpn3kecbanjarharjo@gmail.com</p>
              <p>Estibaja@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="500">
              <i class="bi bi-clock"></i>
              <h3>Open Hours</h3>
              <p>Senin-sabtu</p>
              <p>06.30 - 15.00</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      <div class="col-lg-6">
        @if (Session::has('message'))
        <div class="alert alert-success center" role="alert">
            {{Session::get('message')}}
        </div>      
        @endif
        <form action="{{ route('kontak.create') }}" method="post" class="php-email-form" data-aos="fade-up"
          data-aos-delay="200">
          @csrf
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <button type="submit">Send Message</button>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- End Contact Section -->
@endsection