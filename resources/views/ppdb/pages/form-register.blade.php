@extends('ppdb.layout.master')
@section('title', ' Form Registrasi')

@section('content')
<!-- Blog Page Title & Breadcrumbs -->
<div data-aos="fade" class="page-title">
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">PPDB</li>
                <li class="current">@yield('title')</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->
<section class="container contact">
    <div class="card mb-5">
        <div class="card-header">
            <span class="mb-2 text-secondary">Daftar Formulir Registrasi Akun Siswa</span>
            <hr>
            <h2 class="fw-bold text-uppercase text-dark">Calon Peserta Didik SMPN3 BANJARHARJO</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('/register') }}" method="post" class="php-email-form">
                @csrf
                <div class="data-pribadi mb-5">
                    <div class="title">
                        <h5 class="fw-bold text-secondary">Data Pribadi</h5>
                        <hr style="border-top: 3px solid rgb(84, 84, 84);">
                    </div>
                    <div class="content">
                        <div class="mb-3">
                            <label for="nama" class="form-label text-secondary">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="name"
                                placeholder="Masukan Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary">Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Masukan Email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-secondary">Password:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukan Password" required>
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label text-secondary">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
                                <option disabled selected>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="tempat_lahir" class="form-label text-secondary">Tempat Lahir:</label>
                                <input type="text" class="form-control" placeholder="tempat lahir" name="tempat_lahir"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_lahir" class="form-label text-secondary">Tanggal Lahir:</label>
                                <input type="date" class="form-control" placeholder="tanggl lahir" name="tanggal_lahir"
                                    required>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="telephon" class="form-label text-secondary">Telepon:</label>
                            <input type="number" class="form-control" id="telephon" name="telephon"
                                placeholder="Masukan No Hp" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Alamat:</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Kamu"
                                required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label text-secondary">Asal sekolah</label>
                            <input type="text" class="form-control" id="sekolah" name="asal_sekolah"
                                placeholder="Asal Sekolah" required>
                        </div>
                        {{--
                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Agama</label>
                            <input type="text" class="form-control" id="Agama" value="" name="agama">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Jarak Rumah Ke sekolah:</label>
                            <input type="text" class="form-control" id="sekolah" value="" name="jarak_rumah_kesekolah">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Total rata-rata nilai:</label>
                            <input type="text" class="form-control" id="rata-rata" value=""
                                name="total_nilai_rata_rata">
                        </div> --}}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-end py-2 px-5">Daftar</button>


            </form>
        </div>
    </div>
</section>


@endsection