@extends('admin.layout.master_admin')
@section('title', 'Form Edit')

@section('content')
     <!-- Area Chart -->
     <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('title') </h6>            
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('artikels.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                    @csrf
                    <div class="row g-3 mb-3">
                        <div class="col-lg-6">
                          <label for="judul" class="form-label">Judul Artikel</label>
                          <input type="text" class="form-control" placeholder="Masukan Nama Customer" name="judul" value="{{$artikel->judul}}">
                          @error('judul')
                          <small style="color: red">{{$message}}</small>                           
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label for="" class="form-label">Slug</label>
                          <input type="text" class="form-control" placeholder="Masukan Komentar" name="slug" value="{{$artikel->slug}}">
                          @error('slug')
                          <small style="color: red">{{$message}}</small>                           
                          @enderror
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-lg-6">
                            <label for="" class="form-label">Isi Artikel</label>
                            <textarea type="text" class="form-control" id="isi-artikel" placeholder="Masukan Isi Artikel" name="body">{{$artikel->body}}</textarea>
                            @error('body')
                            <small style="color: red">{{$message}}</small>                           
                            @enderror
                        </div>
                        <div class="col-lg-6">
                          <label for="" class="form-label">Upload Gambar</label>
                          <div class="gambar mb-3">
                            <img src="/image/{{$artikel->gambar}}" alt="" width="100">
                          </div>
                          <div class="input-group">             
                            <input type="file" class="form-control" name="gambar" value="{{$artikel->gambar}}">
                          </div>
                          @error('gambar')
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
@endsection