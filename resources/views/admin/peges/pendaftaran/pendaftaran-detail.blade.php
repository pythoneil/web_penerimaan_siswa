@extends('admin.layout.master_admin')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark d-flex justify-content-between align-items-center">
                    <h4 class="text-white">Detail Calon Siswa</h4>
                    <a href="/my_daftar" class="btn btn-warning btn-sm text-white px-3">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="card mb-5">
                                    <div class="card-header p-2 mt-2">
                                        <h5>Infromasi Data calon siswa</h5>
                                        <hr class="custom-hr" style="height: 1px; background-color: #49494a;">
                                    </div>
                                    <div class="card-body px-2 py-0">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <label for="nama_paket" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    value="{{ $daftar->name }}" disabled>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="nama_paket" class="form-label">Email</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    value="{{ $daftar->email }}" disabled>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="nama_paket" class="form-label">Jenis Kelamin</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    value="{{ $daftar->jenis_kelamin }}" disabled>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">No Telp</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->telephon}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->alamat}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->tempat_lahir}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Tanggal Lahir</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->tanggal_lahir}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Asal Sekolah</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->asal_sekolah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Agama</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->agama}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Jarak Rumah Kesekolah</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->jarak_rumah_kesekolah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Rata-rata Nilai</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->total_nila_rata_rata}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Nama Ayah</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nama_ayah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Alamat </label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->alamat_ayah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">No Telp </label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nomor_telpon_ayah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->pendidikan_terakhir_ayah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Nama Ibu</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nama_ibu}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->alamat_ibu}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">No Telp</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nomor_telpon_ibu}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->pendidikan_terakhir_ibu}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Kartu Keluarga</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->upload_file_kk}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Akte Kelahiran</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->upload_file_akte}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">KIP</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->upload_file_kip}}">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-5">
                                    <div class="card-header p-2 mt-2">
                                        <h5>Infromasi Data Ayah Siswa</h5>
                                        <hr class="custom-hr" style="height: 1px; background-color: #49494a;">
                                    </div>
                                    <div class="card-body px-2 py-0">
                                        <div class="row py-3">
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Nama Ayah</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nama_ayah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Alamat </label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->alamat_ayah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">No Telp </label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nomor_telpon_ayah}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->pendidikan_terakhir_ayah}}">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-5">
                                    <div class="card-header p-2 mt-2">
                                        <h5>Infromasi Data Ibu Siswa</h5>
                                        <hr class="custom-hr" style="height: 1px; background-color: #49494a;">
                                    </div>
                                    <div class="card-body px-2 py-0">
                                        <div class="row py-3">
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Nama Ibu</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nama_ibu}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->alamat_ibu}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">No Telp</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->nomor_telpon_ibu}}">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Anda"
                                                    disabled value="{{$daftar->pendidikan_terakhir_ibu}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-5">
                                    <div class="card-header p-2 mt-2">
                                        <h5>Berkas File Pendukung</h5>
                                        <hr class="custom-hr" style="height: 1px; background-color: #49494a;">
                                    </div>
                                    <div class="card-body px-2 py-0">
                                        <div class="row py-3">
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label font-weight-bold">Kartu
                                                    Keluarga</label>
                                                <img src="image/{{ $daftar->upload_file_kk }}" alt=""
                                                    style="width: auto; height:100px; border-radius:0; object-fit:contain;"
                                                    height="auto">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label font-weight-bold">Akte
                                                    Kelahiran</label>
                                                <img src="image/{{ $daftar->upload_file_akte }}" alt=""
                                                    style="width: auto; height:100px; border-radius:0; object-fit:contain;"
                                                    height="auto">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="nama_paket" class="form-label font-weight-bold">KIP</label>
                                                <img src="image/{{ $daftar->upload_file_kip }}" alt=""
                                                    style="width: auto; height:100px; border-radius:0; object-fit:contain;"
                                                    height="auto" class="d-block">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="col-md-5">

                            <div class="row">

                                <form action="{{url('update-status/'.$daftar->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="" class="font-weight-bolder text-secondary">Status Kelengkapan
                                            Data</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="status_data">
                                            <option {{ $daftar->status_data == '1' ? 'selected': ''}} value="1">Menunggu
                                                Pemeriksaan
                                            </option>
                                            <option {{ $daftar->status_data == '2' ? 'selected': ''}} value="2">Lolos
                                                Verifikasi
                                            </option>
                                            <option {{ $daftar->status_data == '3' ? 'selected': ''}} value="3">Tidak
                                                Lolos Verifikasi
                                            </option>
                                            <option {{ $daftar->status_data == '4' ? 'selected': ''}} value="4">Lengkapi
                                                Data
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="font-weight-bolder text-secondary">Status Seleksi</label>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option {{ $daftar->status == '1' ? 'selected': ''}} value="1">Menunggu
                                            </option>
                                            <option {{ $daftar->status == '2' ? 'selected': ''}} value="2">Diterima
                                            </option>
                                            <option {{ $daftar->status == '3' ? 'selected': ''}} value="3">Ditolak
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        @if($daftar->status == '9')
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary btn-sm mt-4"
                                                    disabled>Update</button>
                                            </div>
                                        </div>
                                        <p class="text-muted">Tidak bisa update karena status delivered</p>
                                        @else
                                        <button class="btn btn-primary btn-sm" type="submit">Update</button>
                                        @endif
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

</div>

@endsection