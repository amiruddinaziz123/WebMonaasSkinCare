@extends('layouts.admin')

@section('content')



    <div class="button_db row text-center">
    <div class="col-4">
        <a href="{{ route('treatment_admin.admin') }}" class="btn btn-success btn-lg">Treatment</a>
    </div>
    <div class="col-4">
        <a href="{{ route('treatment_admin.create') }}" class="btn btn-primary btn-lg"><i class="bi bi-square-plus"></i></i> Tambah</a>
    </div>
    <div class="col-4">
        <a href="{{ route('treatment_admin.history') }}" class="btn btn-warning btn-lg">History</a>
    </div>
    </div>

    <br>
    <br>

    <!-- CARD -->

    <h3>Facial Treatment</h3>

    <div class="row">
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

    .row{
        margin-left: 5%;
    }

    .card{
        height: 530px;
    }

    .card-img-top{
        height: 300px;
        object-fit: cover;
    }

    .button_db{
        margin-top: 8%;
    }

    h3{
        margin-top: 2%;
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

</style>



@endsection
