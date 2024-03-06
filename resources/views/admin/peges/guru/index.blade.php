@extends('admin.layout.master_admin')
@section('title', ' Guru')

@section('content')
<div class="container-fluid">
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
                    <form action="{{ route('gurus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 mb-3">
                            <div class="col-lg-6">
                                <label for="" class="form-label">Nama Guru</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Guru" name="nama_guru">
                                @error('nama_guru')
                                <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="form-label">NIP</label>
                                <input type="number" class="form-control" placeholder="Masukan NIP Guru" name="nip">
                                @error('nip')
                                <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
        
                            <div class="col-lg-6">
                                <label for="" class="form-label">Foto Guru</label>
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
    
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data  @yield('title') </h6>         
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-primary text-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Guru</th>
                                <th>NIP</th>
                                <th>Foto</th>                
                                <th>Action</th>
                            </tr>
                        </thead>     
                        <tbody>
                            @if ($datas->count() > 0)
                                 @foreach ($datas as $item) 
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{$item->nama_guru}}</td>
                                        <td class="align-middle">{{$item->nip}}</td>
                                        <td class="align-middle"><img src="/image/{{ $item->foto }}" alt="" width="100"></td>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <a href="{{route ('gurus.edit', $item->id)}}" type="button" class="btn btn-warning">edit</a>
                                                <form action="{{route ('gurus.destroy', $item->id)}}" method="POST" type="button" class="btn btn-danger p-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0">delete</button>
                                                </form>
                                        </div>
                                        </td>
                                    </tr>                  
                                @endforeach   
                            @else   
                            <tr>
                                <td class="text-center" colspan="5">Data GURU tidak ada!</td>
                            </tr>                 
                             @endif 
                        </tbody>     
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection