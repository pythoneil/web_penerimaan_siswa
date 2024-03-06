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
@endsection