@extends('admin.layout.master_admin')
@section('title', ' Kepala Sekolah')

@section('content')
<div class="row">
    @if (Session::has('message'))
    <div class="alert alert-success center" role="alert">
        {{Session::get('message')}}
    </div>
    @endif
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> Form Tambah @yield('title') </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('kepala-sekolahs.update', $kepalaSekolah->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label for="" class="form-label">Nama Kepala Sekolah</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama Kepala Sekolah"
                                name="nama" value="{{$kepalaSekolah->nama}}">
                            @error('name')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label for="" class="form-label">Sambutan</label>
                            <input type="text" class="form-control" placeholder="Masukan Kata Sambutan" name="sambutan" value="{{$kepalaSekolah->sambutan}}">
                            @error('sambutan')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label for="" class="form-label d-block">Foto Kepala Sekolah</label>
                            <img src="/image/{{ $kepalaSekolah->foto }}" alt=""  width="100" class="mb-3">
                            <div class="input-group">
                                <input type="file" class="form-control" name="foto">
                            </div>
                            @error('foto')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection