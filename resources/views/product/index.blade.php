<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Katibeh&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


#custom-search-input {
    margin-top: 10px;
    padding: 0;
}

.input-group {
    margin: auto; /* Menengahkan secara horizontal */
    max-width: 400px; /* Sesuaikan dengan lebar yang Anda inginkan */
}


 
    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-input button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color:#d90f5c;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }

    /*GAMBAR*/
.carousel-item img {
    margin: 0;
    width: 100%;
}

/*GAMBAR SLIDER*/

.carousel-inner_card{
    display: flex;
    padding: 1em;

}

.carousel-item_card{
    display: block;
    margin-right: 0;
    flex: 0 0 calc(100%/3);
}

.card{
    margin: 0 .5em;
    border-radius: 20px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.3);
}


.b {
    border-radius: 50px;
    color: black;
    font-family: Poppins;
}

.card img { border-radius: 20px 20px 0 0; }

/*TEXT*/
h3 {
    font-family: Katibeh;
    font-size: 35px;
}

h5 {
    font-family: Poppins;
}

p {
    font-family: Poppins;
}


@media (max-width: 576px) {
    .input-group {
        margin-right: 3px;
    }
}

    </style>
  </head>
<body>
  <x-navbar/>  

  {{-- image --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/produk.jpg" class="d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/produk.jpg" class="d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/produk.jpg" class="d-block" alt="...">
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

   {{-- end of image --}}
  

   {{-- search --}}
  <div class="container">
    <div class="row mb-5 text-center align-items-center justify-content-center">
             <div id="custom-search-input">
                              <div class="input-group col-md-4">
                                  <input type="text" class="  search-query form-control" placeholder="Search" />
                                  <span class="input-group-btn">
                                      <button class="btn btn-danger" type="button">
                                          <span class=" glyphicon glyphicon-search"></span>
                                      </button>
                                  </span>
                              </div>
                          </div>
    </div>
  </div>
  {{-- end search --}}

  {{-- card --}}
  <h3>Product</h3>

  <div class="row">
              <div class="col">
              <div class="card my-3">
                  <img src="/img/produk.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">face wash</h5>
                      <p class="card-text">mengencangkan wajah serta mengurasi keriput</p>
                      <div class="input-group d-flex justify-content-between">
                        <div class="text-small">
                            <small class="fs-2 text-lg">10.000,00 IDR</small>
                        </div>
                        <div class="buy">
                            <small>
                                <button class="btn btn-primary rounded" style="border-radius: 25px;
                                border: 1.5px solid #000;
                                background: var(--ungu, #E681FF);">Buy</button>
                            </small>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
  
              <div class="col">
                  <div class="card my-3">
                    <img src="/img/produk.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">Laser Treatment</h5>
                          <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
                          <div class="input-group d-flex justify-content-between">
                            <div class="text-small">
                                <small class="fs-2 text-lg">10.000,00 IDR</small>
                            </div>
                            <div class="buy">
                                <small>
                                    <button class="btn btn-primary rounded">Buy</button>

                                </small>
                            </div>
                          </div>
                      </div>
                  </div>
                  </div>
  
  
                  <div class="col">
                      <div class="card my-3">
                        <img src="/img/produk.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">Laser Treatment</h5>
                              <p class="card-text">Perawatan untuk mengencangkan kulit wajah dan mengurangi keriput di wajah.</p>
                              <div class="input-group d-flex justify-content-between">
                                <div class="text-small">
                                    <small class="fs-2 text-lg">10.000,00 IDR</small>
                                </div>
                                <div class="buy">
                                    <small>
                                        <button class="btn btn-primary rounded">Buy</button>

                                    </small>
                                </div>
                              </div>
                          </div>
                      </div>
                      </div>
  </div>

{{-- end card --}}


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>