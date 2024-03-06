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

<!-- About Section - Home Page -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-xl-center gy-5">

      <div class="col-xl-5 content">
        <h3>About Us</h3>
        <h2>Sejarah SMPN 3 Banjarharjo</h2>
        <p>SMP Negeri 3 Banjarharjo terletak di desa Bandungsari Kecamatan Banjarharjo Kabupaten Brebes. Proses penegriannya pada tahun 1988, ditandatangani oleh dinas Pendidikan Kabupaten Brebes. SMP Negeri 3 Banjarharjo termasuk sebagai sekolah yang dipercaya oleh Departemen Pendidikan Nasional RI untuk menyelenggarakan program pendidikan tingkat pertama.
          Sebagai sekolah lanjutan SMP Negeri 3 Banjarharjo selalu berusaha meningkatkan kualitas pendidikan. karena meningkatkan kualitas pendidikan merupakan keinginan yang selalu diupayakan terus menerus guna memenuhi harapan orang tua dan masyarakat akan keberhasilan putra-putrinya menjadi manusia yang berguna bagi nusa dan bangsa serta agamanya. Lulusan SMP Negeri 3 Banjarharjo diharapkan bisa bersaing guna melanjutkan kejenjang yang lebih tinggi.
        </p>
          <h3>VISI</h3>
          <p>Luhur budi pekerti, unggul prestasi, terampil, dan mandiri</p>
          <h3>MISI</h3>
          <p>1. Melaksanakan pembinaan mental secara rutin maupun insidental</p>
          <p>2. Melaksanakan bimbingan secara intensif</p>
          <p>3. Melaksanakan pembelajaran secara efektif dan efisien,</p>
          <p>4. Mendorong siswa untuk meningkatkan prestasi akademis dan non akademis</p>
          <P>5. Menciptakan lingkungan kerja dan belajar yang menyenangkan</P>
          <P>6. Membekali siswa dengan keterampilan</P>
          <p>7. Mempersiapkan siswa menuju jenjang pendidikan yang lebih tinggi.</p>
          </p>
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
@endsection