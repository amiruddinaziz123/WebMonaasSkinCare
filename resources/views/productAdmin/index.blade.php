@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <a href="{{ route('masterAdmin.index') }}" class="btn btn-primary">
                    <i class="bi bi-person-add"></i> Tambah
                </a>
                <a href="{{ route('customerAdmin.histori') }}" class="btn btn-danger ms-1">
                    <i class="bi bi-archive"></i> Histori
                </a>
            </div>

            {{-- <div class="col-12">
                <table id="example" class="table table-dark" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Telepon</th>
                            <th>Status Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $mtr)
                            <tr>
                                <td>{{ $mtr->id }}</td>
                                <td>{{ $mtr->username_user }}</td>
                                <td>{{ $mtr->email_user }}</td>
                                <td>{{ $mtr->password_user }}</td>
                                <td>{{ $mtr->no_telp_user }}</td>
                                <td>{{ $mtr->status_aktif }}</td>
                                <td>
                                    <a href="{{ route('customerAdmin.detail', $mtr->slug_link) }}" class="btn btn-primary btn-sm" role="button">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('customerAdmin.edit', $mtr->slug_link) }}" class="btn btn-success btn-sm" role="button">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('customerAdmin.softdelete', $mtr->slug_link) }}" class="btn btn-danger btn-sm" role="button">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Telepon</th>
                            <th>Status Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div> --}}
        </div>
    </section>
</div>

@endsection
