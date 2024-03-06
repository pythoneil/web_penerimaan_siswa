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

<!-- Recent-posts Section - Home Page -->
<section id="recent-posts" class="recent-posts">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Galery Kegiatan</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->
  
    <div class="container">
  
      <div class="row gy-4">
  
        @foreach ($kegiatans as $kegiatan)
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article>
  
            <div class="post-img">
              <img src="/image/{{ $kegiatan->gambar }}" alt="" class="img-fluid">
            </div>
            <h2 class="title">
              <a href="#">{{$kegiatan->judul}}</a>
            </h2>
  
          </article>
        </div><!-- End post list item -->
        @endforeach
  
      </div><!-- End recent posts list -->
  
    </div>
  
  </section><!-- End Recent-posts Section -->
@endsection