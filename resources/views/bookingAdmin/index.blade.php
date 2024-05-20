@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Customer</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                {{-- <a href="{{ route('masterAdmin.index') }}" class="btn btn-primary">
                    <i class="bi bi-building-add"></i> Tambah Customer
                </a> --}}
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($customers as $mtr)
                            <tr>
                                <td>{{ $mtr->id }}</td>
                                <td>{{ $mtr->username_user }}</td>
                                <td>{{ $mtr->email_user }}</td>
                                <td>{{ $mtr->password_user }}</td>
                                <td>{{ $mtr->no_telp_user }}</td>
                                <td>
                                    <a href="{{ route('customerAdmin.edit', $mtr->slug_link) }}" class="btn btn-success btn-sm" role="button">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('customerAdmin.destroy', $mtr->slug_link) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
