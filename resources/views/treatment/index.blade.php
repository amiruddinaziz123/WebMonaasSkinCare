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
            <div class="col">
            <div class="card my-3">
                <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Laser Treatment</h5>
                    <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
                    <a href="#" class="btn b">Booking</a>
                </div>
            </div>
        </div>

            <div class="col">
                <div class="card my-3">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laser Treatment</h5>
                        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
                        <a href="#" class="btn b">Booking</a>
                    </div>
                </div>
                </div>


                <div class="col">
                    <div class="card my-3">
                        <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Laser Treatment</h5>
                            <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
                            <a href="#" class="btn b">Booking</a>
                        </div>
                    </div>
                    </div>
</div>

<br><br>






@endsection
