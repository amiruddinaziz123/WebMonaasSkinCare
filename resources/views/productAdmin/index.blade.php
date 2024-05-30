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
                <a href="{{ route('productAdmin.tambah') }}" class="btn btn-primary">
                    <i class="bi bi-person-add"></i> Tambah
                </a>
                <a href="{{ route('customerAdmin.histori') }}" class="btn btn-danger ms-1">
                    <i class="bi bi-archive"></i> Histori
                </a>
            </div>
            <div class="row">
            @foreach ($products as $pro)
            

            
            <div class="col-4 mt-3">
        <div class="card">
            <img src="/img/{{ $pro->foto_product }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mt-3">{{ $pro->nama_product }}</h5>
                <p class="card-text">{{ $pro->description_product }}</p>
                <h3>{{ $pro->harga_product }}</h3>
            </div>
            
            <div class="row mb-3 ml-2">
                
            <div class="col-4" >
                <a href="{{ route('productAdmin.edit', $pro->slug_link) }}" class="btn btn-success btn-sm" role="button">
                <i class="bi bi-pencil"></i>
            </a>
        </div>
            <div class="col-4" style="margin-left: -70px">
                <a href="{{ route('productAdmin.softdelete', $pro->slug_link) }}" class="btn btn-danger btn-sm" role="button">
                <i class="bi bi-trash3"></i>
            </a>
        </div>
            </div>
            
        </div>
        </div>
        @endforeach
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

<style>
    .card{
        height: 530px;
        border-radius: 20px;
    }

    .card-img-top{
        height: 300px;
        object-fit: cover;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var cardTexts = document.querySelectorAll(".card-text");

        cardTexts.forEach(function(cardText) {
            var originalText = cardText.textContent;
            var limitedText = originalText.slice(0, 150);

            if (originalText.length > 150) {
                limitedText += "...";
            }

            cardText.textContent = limitedText;

            cardText.addEventListener("click", function() {
                if (cardText.textContent === limitedText) {
                    cardText.textContent = originalText;
                } else {
                    cardText.textContent = limitedText;
                }
            });
        });
    });
</script>

@endsection
