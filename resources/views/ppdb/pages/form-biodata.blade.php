@extends('ppdb.layout.master')
@section('title', ' Form Biodata')

@section('content')
<!-- Blog Page Title & Breadcrumbs -->
<div data-aos="fade" class="page-title">
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">@yield('title')</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<section class="container contact">
    <div class="card mb-5">
        <div class="card-header mb-3">
            <span class="mb-2 text-secondary">Daftar Formulir Registrasi Akun Siswa</span>
            <hr>
            <h5 class="fw-bold text-uppercase ">Calon Peserta Didik SMPN3 BANJARHARJO</h5>
        </div>
        @if(session('success'))
        <div class="container">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
        @endif
        <div class="card-body">
            @if ($datas->Count() > 0)
            @foreach ($datas as $item)
            <form action="{{  route('update.formulir.ppdb', ['id' => $item->id]) }}" method="post"
                class="php-email-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="data-pribadi mb-5">
                    <div class="title">
                        <h5 class="font-weight-bolder text-secondary">Data Pribadi</h5>
                        <hr style="border-top: 3px solid rgb(84, 84, 84);">
                    </div>
                    <div class="content">
                        <div class="mb-3">
                            <label for="nama" class="form-label text-secondary">Nama:</label>
                            <input type="text" class="form-control" id="nama" value="{{$item->name}}" name="name"
                                placeholder="Masukan Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary">Email:</label>
                            <input type="email" class="form-control" id="email" value="{{$item->email}}" name="email"
                                placeholder="Masukan Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label text-secondary">jenis kelamin:</label>
                            <select class="form-select" name="jenis_kelamin" required>
                                <option {{ $item->jenis_kelamin == 'Laki-laki' ? 'selected': ''}}
                                    value="Laki-laki">Laki-laki</option>
                                <option {{ $item->jenis_kelamin == 'Perempuan' ? 'selected': ''}}
                                    value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="tempat_lahir" class="form-label text-secondary">tempat lahir:</label>
                                <input type="text" class="form-control" placeholder="tempat lahir"
                                    value="{{$item->tempat_lahir}}" name="tempat_lahir" required>
                            </div>
                            <div class="col">
                                <label for="tanggal_lahir" class="form-label text-secondary">tanggal lahir:</label>
                                <input type="date" class="form-control" placeholder="tanggl lahir"
                                    value="{{$item->tanggal_lahir}}" name="tanggal_lahir" required>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="telepon" class="form-label text-secondary">Telepon:</label>
                            <input type="number" class="form-control" id="telepon" value="{{$item->telephon}}"
                                name="telephon" placeholder="Masukan No Hp" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Alamat:</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Kamu"
                                required>{{$item->alamat}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label text-secondary">Asal sekolah</label>
                            <input type="text" class="form-control" id="sekolah" value="{{$item->asal_sekolah}}"
                                name="asal_sekolah" placeholder="Asal Sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Agama</label>
                            <input type="text" class="form-control" id="Agama" name="agama" value="{{$item->agama}}">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Jarak Rumah Ke sekolah:</label>
                            <input type="text" class="form-control" id="sekolah"
                                value="{{$item->jarak_rumah_kesekolah}}" name="jarak_rumah_kesekolah">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Total rata-rata nilai:</label>
                            <input type="text" class="form-control" id="rata-rata"
                                value="{{$item->total_nilai_rata_rata}}" name="total_nilai_rata_rata">
                        </div>
                    </div>
                </div>

                <div class="data-ayah mb-5">
                    <div class="title">
                        <h5 class="font-weight-bolder text-secondary">Data Diri Ayah</h5>
                        <hr style="border-top: 3px solid rgb(84, 84, 84);" </div>
                        <div class="content">

                            <div class="mb-3">
                                <label for="alamat" class="form-label text-secondary">Nama Ayah :</label>
                                <input type="text" class="form-control" id="orangtua" value="{{$item->nama_ayah}}"
                                    name="nama_ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label text-secondary">Alamat Ayah :</label>
                                <input type="text" class="form-control" id="rata-rata" value="{{$item->alamat_ayah}}"
                                    name="alamat_ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label text-secondary">Nomor Telepon Ayah :</label>
                                <input type="number" class="form-control" id="rata-rata"
                                    value="{{$item->nomor_telpon_ayah}}" name="nomor_telpon_ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label text-secondary">Pendidikan Terakhir</label>
                                <select class="form-select" name="pendidikan_terakhir_ayah" required>
                                    <option {{ $item->pendidikan_terakhir_ayah == 'SD' ? 'selected': ''}} value="SD">SD
                                    </option>
                                    <option {{ $item->pendidikan_terakhir_ayah == 'SMP' ? 'selected': ''}}
                                        value="SMP">SMP</option>
                                    <option {{ $item->pendidikan_terakhir_ayah == 'SMP' ? 'selected': ''}}
                                        value="SMA">SMA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="data-ibu mb-5">
                    <div class="title">
                        <h5 class="font-weight-bolder text-secondary"> Data diri ibu</h5>
                        <hr style="border-top: 3px solid rgb(84, 84, 84);" </div>
                        <div class="content">
                            <div class="mb-3">
                                <label for="" class="form-label text-secondary">Nama Ibu:</label>
                                <input type="text" class="form-control" id="rata-rata" value="{{$item->nama_ibu}}"
                                    name="nama_ibu" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label text-secondary">Alamat Ibu:</label>
                                <input type="text" class="form-control" id="rata-rata" value="{{$item->alamat_ibu}}"
                                    name="alamat_ibu" required>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label text-secondary">Nomor Telepon Ibu </label>
                                <input type="number" class="form-control" id="rata-rata"
                                    value="{{$item->nomor_telpon_ibu}}" name="nomor_telpon_ibu" required>
                            </div>

                            <div class="mb-3">
                                <label for="pendidikan" class="form-label text-secondary">Pendidikan Terakhir</label>
                                <select class="form-select" name="pendidikan_terakhir_ibu" required>
                                    <option {{ $item->pendidikan_terakhir_ibu == 'SD' ? 'selected': ''}} value="SD">SD
                                    </option>
                                    <option {{ $item->pendidikan_terakhir_ibu == 'SMP' ? 'selected': ''}}
                                        value="SMP">SMP</option>
                                    <option {{ $item->pendidikan_terakhir_ibu == 'SMP' ? 'selected': ''}}
                                        value="SMA">SMA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex">
                    <div class="mb-3 col">
                        <label for="formFile" class="form-label text-secondary d-block">upload file kk :</label>
                        <img src="image/{{ $item->upload_file_kk }}" alt="" class="mb-3"
                            style="width: auto; height:100px; border-radius:0; object-fit:contain;" height="auto">
                        <input class="form-control" type="file" id="formFilename=" name="upload_file_kk">
                    </div>
                    <div class="mb-3 col">
                        <label for="formFile" class="form-label text-secondary d-block">upload file akte
                            kelahiran</label>
                        <img src="image/{{ $item->upload_file_akte }}" alt="" class="mb-3"
                            style="width: auto; height:100px; border-radius:0; object-fit:contain;" height="auto">
                        <input class="form-control" type="file" id="formFilename=" name="upload_file_akte">
                    </div>
                    <div class="mb-3 col">
                        <label for="formFile" class="form-label text-secondary d-block">upload kip :</label>
                        <img src="image/{{ $item->upload_file_kip }}" alt="" class="mb-3"
                            style="width: auto; height:100px; border-radius:0; object-fit:contain;" height="auto">
                        <input class="form-control" type="file" id="formFile" name="upload_file_kip">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm float-end py-2 px-5">Update</button>
            </form>
        </div>

        @endforeach

        @else
        <div class="card-body">
            <form action="{{ route('submit.formulir.ppdb')}}" method="post" enctype="multipart/form-data"
                class="php-email-form">
                @csrf
                <div class="data-pribadi mb-5">
                    <div class="title">
                        <h5 class="font-weight-bolder text-secondary">Data Pribadi</h5>
                        <hr style="border-top: 3px solid rgb(84, 84, 84);">
                    </div>
                    <div class="content">
                        <div class="mb-3">
                            <label for="nama" class="form-label text-secondary">Nama:</label>
                            <input type="text" class="form-control" id="nama" value="{{Auth::user()->name}}" name="name"
                                placeholder="Masukan Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary">Email:</label>
                            <input type="email" class="form-control" id="email" value="{{Auth::user()->email}}" name="email"
                                placeholder="Masukan Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label text-secondary">jenis kelamin:</label>
                            <select class="form-select" name="jenis_kelamin" required>
                                <option {{ Auth::user()->jenis_kelamin == 'Laki-laki' ? 'selected': ''}}
                                    value="Laki-laki">Laki-laki</option>
                                <option {{ Auth::user()->jenis_kelamin == 'Perempuan' ? 'selected': ''}}
                                    value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="tempat_lahir" class="form-label text-secondary">tempat lahir:</label>
                                <input type="text" class="form-control" placeholder="tempat lahir"
                                    value="{{Auth::user()->tempat_lahir}}" name="tempat_lahir" required>
                            </div>
                            <div class="col">
                                <label for="tanggal_lahir" class="form-label text-secondary">tanggal lahir:</label>
                                <input type="date" class="form-control" placeholder="tanggl lahir"
                                    value="{{Auth::user()->tanggal_lahir}}" name="tanggal_lahir" required>
                            </div>
                        </div>
    
    
                        <div class="mb-3">
                            <label for="telepon" class="form-label text-secondary">Telepon:</label>
                            <input type="number" class="form-control" id="telepon" value="{{Auth::user()->telephon}}"
                                name="telephon" placeholder="Masukan No Hp" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Alamat:</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Kamu"
                                required>{{Auth::user()->alamat}}</textarea>
                        </div>
    
                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label text-secondary">Asal sekolah</label>
                            <input type="text" class="form-control" id="sekolah" value="{{Auth::user()->asal_sekolah}}"
                                name="asal_sekolah" placeholder="Asal Sekolah" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Agama</label>
                            <input type="text" class="form-control" id="Agama" name="agama" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Jarak Rumah Ke sekolah:</label>
                            <input type="text" class="form-control" id="sekolah" value="" name="jarak_rumah_kesekolah"
                                required>
                        </div>
    
                        <div class="mb-3">
                            <label for="alamat" class="form-label text-secondary">Total rata-rata nilai:</label>
                            <input type="text" class="form-control" id="rata-rata" value="" name="total_nilai_rata_rata"
                                required>
                        </div>
                    </div>
                </div>
    
                <div class="data-ayah mb-5">
                    <div class="title">
                        <h5 class="font-weight-bolder text-secondary">Data Diri Ayah</h5>
                        <hr style="border-top: 3px solid rgb(84, 84, 84);" </div>
                        <div class="content">
    
                            <div class="mb-3">
                                <label for="alamat" class="form-label text-secondary">Nama Ayah :</label>
                                <input type="text" class="form-control" id="orangtua" value="" name="nama_ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label text-secondary">Alamat Ayah :</label>
                                <input type="text" class="form-control" id="rata-rata" value="" name="alamat_ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label text-secondary">Nomor Telepon Ayah :</label>
                                <input type="number" class="form-control" id="rata-rata" value="" name="nomor_telpon_ayah"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan_terakhir_ayah" class="form-label text-secondary">Penidikan
                                    Terakhir</label>
                                <select class="form-select" name="pendidikan_terakhir_ayah" required>
                                    <option selected disabled>Pilih Penididikan</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="data-ibu mb-5">
                    <div class="title">
                        <h5 class="font-weight-bolder text-secondary"> Data diri ibu</h5>
                        <hr style="border-top: 3px solid rgb(84, 84, 84);" </div>
                        <div class="content">
                            <div class="mb-3">
                                <label for="" class="form-label text-secondary">Nama Ibu:</label>
                                <input type="text" class="form-control" id="rata-rata" value="" name="nama_ibu" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label text-secondary">Alamat Ibu:</label>
                                <input type="text" class="form-control" id="rata-rata" value="" name="alamat_ibu" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="" class="form-label text-secondary">Nomor Telepon Ibu </label>
                                <input type="number" class="form-control" id="rata-rata" value="" name="nomor_telpon_ibu"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan_terakhir_ibu" class="form-label text-secondary">Pendidikan
                                    Terakhir:</label>
                                <select class="form-select" name="pendidikan_terakhir_ibu" required>
                                    <option selected disabled>Pilih Pendidikann</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                </select>
                            </div>
    
                        </div>
                    </div>
                </div>
    
    
                <div class="row d-flex">
                    <div class="mb-3 col">
                        <label for="formFile" class="form-label text-secondary">upload file kk :</label>
                        <input class="form-control" type="file" id="formFilename=" name="upload_file_kk" required>
                    </div>
                    <div class="mb-3 col">
                        <label for="formFile" class="form-label text-secondary">upload file akte kelahiran
                            :</label>
                        <input class="form-control" type="file" id="formFilename=" name="upload_file_akte" required>
                    </div>
                    <div class="mb-3 col">
                        <label for="formFile" class="form-label text-secondary">upload kip :</label>
                        <input class="form-control" type="file" id="formFile" name="upload_file_kip" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-end py-2 px-5">Daftar</button>
            </form>
        </div>

        @endif



</section>

@endsection