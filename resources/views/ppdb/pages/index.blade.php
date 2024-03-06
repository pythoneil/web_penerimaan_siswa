@extends('ppdb.layout.master')
@section('title', ' Dashboard')

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


<section class="container py-5 mb-5">
    <div class="header-dashboard mb-5">
        <h5 class="fw-semibold text-dark">Hallo! , {{ auth()->user()->name }}</h5>
        <h2 class="fw-semibold text-dark">Selamat Datang di PPDB SMPN3 BANJARHARJO</h2>
    </div>
    <div class="card mb-5">
        <div class="card-header bg-warning">
            <span class="mb-2 text-light-emphasis">Data Registrasi Calon Siswa</span>
            <hr>
            <h5 class="fw-bold text-uppercase text-dark">Status Registrasi Calon Peserta</h5>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Kelengkpan Data</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Cetak Kartu</th>

                        </tr>
                    </thead>
                    <tbody class="php-email-form">
                        @if ($data->Count() > 0)
                        @foreach ($data as $item)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->asal_sekolah}}</td>
                            <td>
                                <span
                                class="badge
                        {{ $item->status_data == '1' ? 'text-bg-danger' : ($item->status_data == '2' ? 'text-bg-success' : ($item->status_data == '3' ? 'text-bg-primary' : ($item->status_data == '4' ? 'text-bg-warning' : 'text-bg-grey'))) }}">
                                {{ $item->status_data == '1' ? 'Menunggu Pemeriksaan' : ($item->status_data == '2' ?
                                'Lolos Verifikasi'
                                :
                                ($item->status_data == '3' ? 'Tidak Lolos Verifikasi' : ($item->status_data == '4' ?
                                'Lengkapi Data' : 'unknown'))) }}
                            </span>
                            </td>
                            <td> <span
                                    class="badge
                                    {{ $item->status == '1' ? 'text-bg-danger' : ($item->status == '2' ? 'text-bg-success' : ($item->status == '3' ? 'text-bg-danger' : 'text-bg-secondary')) }}">
                                    {{ $item->status == '1' ? 'Pending' : ($item->status == '2' ? 'Lulus': ($item->status == '3' ? 'Tidak Lulus': 'unknown')) }}
                                </span></td>
                            <td class="text-center">
                                @if($item->status != '2')
                                <button class="btn btn-primary" disabled><i class="bi bi-printer-fill"></i></button>
                                @else
                                <a href="{{url('/cetak-kartu')}}" class="btn btn-primary"><i class="bi bi-printer-fill"></i></a>
                                @endif
                            </td>

                        </tr>

                        @endforeach
                        @else
                        <tr class="text-center">
                            <td>Data
                                tidak Ada</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection