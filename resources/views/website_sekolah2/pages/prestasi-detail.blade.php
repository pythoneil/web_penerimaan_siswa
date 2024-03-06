@extends('website_sekolah2.layout.master2')
@section('title', ' Prestasi Detail')

@section('content')
  <!-- Blog Details Page Title & Breadcrumbs -->
  <div data-aos="fade" class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Blog Details</h1>
            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Blog Details</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Blog-details Section - Blog Details Page -->
  <section id="blog-details" class="blog-details">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="article">

            <div class="post-img">
              <img src="/image/{{ $artikel->gambar }}" alt="" class="img-fluid" width="100%">
            </div>

            <h2 class="title">{{$artikel->judul}}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"></time></a></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
             <p>{{$artikel->body}}</p>
            </div><!-- End post content -->

          </article><!-- End post article -->

      

        </div>

        <div class="col-lg-4">

          <div class="sidebar">

            <div class="sidebar-item recent-posts">
              <h3 class="sidebar-title">Recent Posts</h3>

              @foreach ($artikels as $item)
              <div class="post-item">
                <img src="/image/{{ $item->gambar }}" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="{{route('prestasi.detail', ['id' => $item->id]) }}">{{$item->judul}}</a></h4>
                  <time datetime="2020-01-01">{{date("d-m-Y", strtotime($item->created_at))}}</time>
                </div>
              </div><!-- End recent post item-->
              @endforeach


            </div><!-- End sidebar recent posts-->


          </div><!-- End Sidebar -->

        </div>

      </div>

    </div>

  </section><!-- End Blog-details Section -->
@endsection