@extends('layouts.admin')

@section('content')

{{-- DIV PEMBUNGKUS AGAR RESPONSIF --}}
<div class="content-wrapper">

    <!-- HEADER DONTENT -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Treatment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Treatment</li> </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- ISI KONTEN --}}
    <section class="content">
        <div class="container-fluid">

            {{-- BUTTON --}}
            <div class="col-12">
                <a href="{{ route('treatment_admin.create') }}" class="btn btn-primary">
                    <i class="bi bi-person-add"></i> Tambah
                </a>
                <a href="{{ route('treatment_admin.history') }}" class="btn btn-danger ms-1">
                    <i class="bi bi-archive"></i> Histori
                </a>
            </div>

            {{-- CARD --}}
            <div class="row kartu">
                @foreach ($treatments as $treat )
                        <div class="col-4">
                        <div class="card my-3 jarak" id="jarakslice">
                            <img src="{{ asset('storage/images/' . $treat->foto_treatment)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 25px;">{{ $treat->nama_treatment }}</h5>
                                <p class="card-text">{{ $treat->description_treatment }} </p>
                                <p class="card-harga">{{$treat->harga_treatment}}</p>
                                <div class="tengah" style="text-align: center;">
                                <a href="{{route('treatment_admin.edit', $treat->slug_link)}}" class="btn btn-success" style="margin-right: 20px;"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('treatment_admin.hapus', $treat->slug_link)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </div>
        
                            </div>
                        </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
</div>


<style>
    #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }

    .row.kartu{
        margin-left: 5%;
    }

    .card{
        height: 530px;
        border-radius: 20px;
    }

    .card-img-top{
        height: 300px;
        object-fit: cover;
    }

    .button_db{
        margin-top: 2%;
    }

    .tulisan h3{
        margin-top: 6%;
        margin-bottom: 5%;
        text-align: center;
    }

    .card-title{
        height: 40px;
    }

    .card-text {
        height: 93px;
        text-align: center;
        align-content: center;
    }

    .pinggir{
        text-align: right;
    }

    p.card-harga{text-align: center;}


    @media only screen and (max-width: 990px) {
        .row {
            display: block;
            width: 75%;
            margin: auto;
        }
        .row .card:hover {
            scale: unset;
        }
        .row .col-4 {
            width: 100%;
        }
        .container-fluid .img img, .container-fluid .icon {
            margin-right: 0;
        }
    }

</style>



@endsection
