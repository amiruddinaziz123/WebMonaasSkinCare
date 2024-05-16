@extends('treatment/layout')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="d-block" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

<br>
<br>

<!-- CARD -->

<h3 class="subjudul">Facial Treatment</h3>

<div class="row">
    @foreach ($treatments as $treat)
        <div class="col-4">
            <div class="card my-3 jarak" id="jarakslice">
                <img src="{{ asset('storage/images/' . $treat->foto_treatment)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 25px;">{{ $treat->nama_treatment }}</h5>
                    <p class="card-text">{{ $treat->description_treatment }} </p>
                    <a href="#" class="btn b">Booking</a>
                </div>
            </div>
        </div>
    @endforeach

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
        border-radius: 20px;
    }

    .card-img-top{
        height: 300px;
        object-fit: cover;
    }

    .button_db{
        margin-top: 2%;
    }

    h3{
        margin-top: 4%;
        margin-bottom: 3%;
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
</style>




@endsection
