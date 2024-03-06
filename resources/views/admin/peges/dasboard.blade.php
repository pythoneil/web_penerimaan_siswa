@extends('admin.layout.master_admin')
@section('title', ' Dashboard')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row mb-5">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                               Menunggu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pendingCount}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-clock fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Ditolak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$failedCount}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-times-circle fa-2x text-danger" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Diterima
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$approvedCount}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-check-circle fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Pendaftar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user-circle fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar Calon Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Kelengkpan Data</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
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
                            <td><a href="{{ url('/detail'. $item->id) }}" class="btn btn-primary btn-sm">Detail</a>
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

</div>
<!-- /.container-fluid -->

</div>
@endsection