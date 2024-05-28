@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Histori Treatment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Histori Treatment</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <a href="{{ route('treatment_admin.admin') }}" class="btn btn-primary">
                    <i class="bi bi-people"></i> Treatment
                </a>
            </div>

            <div class="col-12">
                <table id="example" class="table table-dark" style="width:100%">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th>Foto Treatment</th>
                            <th data-priority="1">Nama Treatment</th>
                            <th data-priority="1">Deskripsi</th>
                            <th data-priority="1">Harga</th>
                            <th data-priority="1">Aksi</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        @foreach ($treatments as $no => $treat)
        
                        <tr>
                            <td>{{++$no}}</td>
                            <td> <img src="{{ asset('storage/images/' . $treat->foto_treatment)}}" class="card-img-top" alt="..." style="width: 160px;"> </td>
                            <td> {{ $treat->nama_treatment}} </td>
                            <td> {{ $treat->description_treatment }} </td>
                            <td> {{ $treat->harga_treatment}}</td>
        
                            <td>
                                <form onsubmit="return confirm('Yakin ingin mempublish ini ?');" action="{{ route('treatment_admin.restore', ['slug_link' => $treat->slug_link]) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">
                                        <i class="bi bi-box-arrow-left"></i> Restore
                                    </button>
                                </form>
        
                                <form onsubmit="return confirm('Yakin ingin menghapus ini ?');" action="{{ route('treatment_admin.deletePermanent', $treat->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm mt-2">
                                        <i class="bi bi-trash3"></i> Delete Permanent
                                    </button>
                                </form>
                            </td>
        
                        @endforeach
                    </tbody>
        
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Foto Treatment</th>
                            <th>Nama Treatment</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
