@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Histori Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Histori Customer</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="col-12 mb-3">
                <a href="{{ route('productAdmin.index') }}" class="btn btn-primary">
                    <i class="bi bi-people"></i> Product
                </a>
            </div>
            <div class="col-12">
                <table id="example" class="table table-dark" style="width:100%">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th>Foto Product</th>
                            <th data-priority="1">Nama Product</th>
                            <th data-priority="1">Deskripsi</th>
                            <th data-priority="1">Harga</th>
                            <th data-priority="1">Aksi</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        @foreach ($products as $no => $pro)
        
                        <tr>
                            <td>{{++$no}}</td>
                            <td> <img src="/img/{{ $pro->foto_product }}" class="card-img-top" alt="..." style="width: 160px;"> </td>
                            <td> {{ $pro->nama_product}} </td>
                            <td> {{ $pro->description_product }} </td>
                            <td> {{ $pro->harga_product}}</td>
        
                            <td>
                                <a href="{{ route('productAdmin.restore', $pro->slug_link) }}" class="btn btn-primary btn-sm" role="button">
                                    <i class="bi bi-trash3"> Restore</i>
                                </a>
                            
        
                                    
                                <a href="{{ route('productAdmin.delete', $pro->slug_link) }}" class="btn btn-danger btn-sm mt-2" role="button">
                                    <i class="bi bi-trash3"> Hapus Permanen</i>
                                </a>
                                
                            </td>
        
                        @endforeach
                    </tbody>
        
                    <tfoot>
                        <tr>
                            <th data-priority="1">No</th>
                            <th>Foto Product</th>
                            <th data-priority="1">Nama Product</th>
                            <th data-priority="1">Deskripsi</th>
                            <th data-priority="1">Harga</th>
                            <th data-priority="1">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
