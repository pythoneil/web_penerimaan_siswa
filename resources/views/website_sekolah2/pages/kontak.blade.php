@extends('website_sekolah2.layout.master2')
@section('title', ' Profile Guru')

@section('content')

<!-- Page Title & Breadcrumbs -->
<div data-aos="fade" class="page-title">
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">@yield('title')</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

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
        <form action="/kontak2" method="post" class="php-email-form" data-aos="fade-up"
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