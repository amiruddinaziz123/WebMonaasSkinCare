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
                            <th>No Telp</th>
                            <th>Tanggal Booking</th>
                            <th>Jam Booking</th>
                            <th>Nama Dokter</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $dataBooking)
                            <tr>
                                <td>{{ $dataBooking->id }}</td>
                                <td>{{ $dataBooking->nama_user }}</td>
                                <td>{{ $dataBooking->no_telp }}</td>
                                <td>{{ $dataBooking->tanggal_booking }}</td>
                                <td>{{ $dataBooking->jam_booking }}</td>
                                <td>{{ $dataBooking->nama_dokter }}</td>

                                <td>
                                    {{-- <a href="{{ route('customerAdmin.edit', $dataBooking->slug_link) }}" class="btn btn-success btn-sm" role="button">
                                        <i class="bi bi-pencil"></i>
                                    </a> --}}
                                    <form action="{{ route('booking.destroy', $dataBooking->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                    
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
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
