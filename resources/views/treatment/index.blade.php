@extends('treatment/layout')

@section('content')

<!-- AZIZ 
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/gambar1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('img/gambar2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('img/gambar1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->

<!-- <div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide col-12">
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
      <img src="{{ asset('img/gambar2.jpg') }}" class="d-block" alt="...">
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
</div> -->


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="d-block w-100" alt="...">
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
<br>

<!-- CARD -->

<h3>Facial Treatment</h3>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner_card">
    <div class="carousel-item_card active">
      <!-- CARD 1 -->
        <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>

    <!-- CARD 2 -->
    <div class="carousel-item_card">
            <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>

    <!-- CARD 3 -->
    <div class="carousel-item_card">
            <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>
  </div>
</div>


<br>


<h3>Facial Treatment</h3>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner_card">
    <div class="carousel-item_card active">
      <!-- CARD 1 -->
        <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>

    <!-- CARD 2 -->
    <div class="carousel-item_card">
            <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>

    <!-- CARD 3 -->
    <div class="carousel-item_card">
            <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>
  </div>
</div>


<br>


<h3>Facial Treatment</h3>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner_card">
    <div class="carousel-item_card active">
      <!-- CARD 1 -->
        <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>

    <!-- CARD 2 -->
    <div class="carousel-item_card">
            <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>

   
    <!-- CARD 3 -->
    <div class="carousel-item_card">
            <div class="card">
      <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laser Treatment</h5>
        <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
        <a href="#" class="btn">Booking</a>
      </div>
    </div>
    </div>
  </div>
</div>

@endsection