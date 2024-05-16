@extends('layouts.admin')

@section('content')


    <div class="col-12 tulisan"><h3>Facial Treatment</h3></div>

    {{-- BUTTON --}}
    <div class="row mb-3 mt-5">
        <div class="col pinggir">
            <a href="{{ route('treatment_admin.admin') }}" class="btn btn-success btn-lg">Treatment</a>
            <a href="{{ route('treatment_admin.create') }}" class="btn btn-primary btn-lg"> Tambah</a>
            <a href="{{ route('treatment_admin.history') }}" class="btn btn-warning btn-lg">History</a>
        </div>
    </div>

    <!-- CARD -->

    <div class="row kartu">
        @foreach ($treatments as $treat )
                <div class="col-4">
                <div class="card my-3 jarak" id="jarakslice">
                    <img src="{{ asset('storage/images/' . $treat->foto_treatment)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 25px;">{{ $treat->nama_treatment }}</h5>
                        <p class="card-text">{{ $treat->description_treatment }} </p>

                        <div class="tengah" style="text-align: center;">
                        <a href="{{route('treatment_admin.edit', $treat->slug_link)}}" class="btn btn-success" style="margin-right: 20px;"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{route('treatment_admin.hapus', $treat->slug_link)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </div>

                    </div>
                </div>
                </div>
        @endforeach
    </div>

<br><br>

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
