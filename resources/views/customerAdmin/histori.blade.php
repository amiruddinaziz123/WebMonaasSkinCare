@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Histori Customer</h1>
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
            <div class="col-12">
                <a href="{{ route('customerAdmin.index') }}" class="btn btn-primary">
                    <i class="bi bi-people"></i> Data
                </a>
            </div>

            <div class="col-12">
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
                                <td>{{ $mtr->username }}</td>
                                <td>{{ $mtr->email }}</td>
                                <td>{{ $mtr->password }}</td>
                                <td>{{ $mtr->no_telp }}</td>
                                <td>{{ $mtr->status_aktif }}</td>
                                <td>
                                    <a href="{{ route('customerAdmin.detail', $mtr->slug_link) }}" class="btn btn-primary btn-sm" role="button">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('customerAdmin.restore', $mtr->slug_link) }}" class="btn btn-warning text-white btn-sm" role="button">
                                        <i class="bi bi-box-arrow-up"></i>
                                    </a>
                                    <a href="{{ route('customerAdmin.delete', $mtr->slug_link) }}" class="btn btn-danger btn-sm" role="button">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    {{-- <form action="{{ route('customerAdmin.destroy', $mtr->slug_link) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form> --}}
                                    
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
            </div>
        </div>
    </section>
</div>

@endsection
