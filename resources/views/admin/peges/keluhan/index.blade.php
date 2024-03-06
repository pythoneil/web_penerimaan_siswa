@extends('admin.layout.master_admin')
@section('title', ' Keluhan')

@section('content')
<div class="container-fluid">   
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Keluhan</th>                
                            </tr>
                        </thead>     
                        <tbody>
                            @if ($datas->count() > 0)
                                 @foreach ($datas as $item) 
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{$item->nama}}</td>
                                        <td class="align-middle">{{$item->email}}</td>
                                        <td class="align-middle">{{$item->message}}</td>
                                        
                                        
                                    </tr>                  
                                @endforeach   
                            @else   
                            <tr>
                                <td class="text-center" colspan="5">Data Keluhan tidak ada!</td>
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