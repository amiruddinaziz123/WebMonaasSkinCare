{{-- @extends('treatment/layout')


@section('content') --}}
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Monaas Treatment</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/treatment.css">
</head>

<x-navbar/>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/monaas.jpg') }}" class="d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/ruang.jpeg') }}" class="d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/produk2.jpeg') }}" class="d-block" alt="...">
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

{{-- SEARCH --}}
{{-- <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="searchbar">
        <form action="{{ route('search') }} " class="d-flex" role="search" method="GET">
        <input class="search_input" type="text" name="query" placeholder="Search..." aria-label="Search" value="{{ request('query') }}">
        <button class="btn btn-outline-dark search_icon" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </div> --}}

  <div class="col-md-4">
    <form action="{{ route('search') }} " class="d-flex" role="search" method="GET">
        <input class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search" value="{{ request('query') }}">
        <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search"></i></button>
  </form>
  </div>

<!-- CARD -->

<h3 class="subjudul">Monaas Treatment</h3>

<div class="row col-12">
    @foreach ($treatments as $treat)
        <div class="col-4">
            <div class="card my-3 jarak" id="jarakslice">
                <img src="{{ asset('storage/images/' . $treat->foto_treatment)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 25px;">{{ $treat->nama_treatment }}</h5>
                    <p class="card-text">{{ $treat->description_treatment }} </p>
                    <p class="card-harga"><b>Rp.  </b>{{ $treat->harga_treatment}}</p>
                    <a href="/booking" class="btnn">Booking</a>
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

    /* .row{
        margin-left: 5%;
    } */

    .card{
        height: 580px;
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
        height: 25px;
        margin-bottom: 5%;
    }

    p.card-text {
        height: 90px;
        text-align: center;
        align-content: center;
    }

    .pinggir{
        text-align: right;
    }
</style>




{{-- @endsection --}}
