@extends('admin.layout.master_admin')
@section('title', 'Data Pendaftar')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendaftar</h1>
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
                        @if ($daftar->Count() > 0)
                        @foreach ($daftar as $item)
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
                            <td>
                                <span
                                    class="badge
                            {{ $item->status == '1' ? 'text-bg-danger' : ($item->status == '2' ? 'text-bg-success' : ($item->status == '3' ? 'text-bg-danger' : 'text-bg-secondary')) }}">
                                    {{ $item->status == '1' ? 'Menunggu' : ($item->status == '2' ? 'Diterima'
                                    :
                                    ($item->status == '3' ? 'Tidak Lulus' : 'Unknown')) }}
                                </span>
                            </td>
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
                <div class="d-flex justify-content-end">
                    {!! $daftar->links() !!}
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection