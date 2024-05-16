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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Katibeh&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body{
    overflow-x: hidden;
}

.searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background: var(--ungu, #E681FF);
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:#ED1E78;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: #ED1E78;
    color: #ED1E78c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
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
    margin: 1em;
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
h2 {
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
   <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="searchbar">
        <input class="search_input" type="text" name="" placeholder="Search...">
        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
      </div>
    </div>
  </div>
  {{-- end search --}}

  {{-- card --}}

  <h2 style="margin-left: 40px;">Product</h2>

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
                                        <button class="btn btn-primary rounded" style="border-radius: 25px;
                                        border: 1.5px solid #000;
                                        background: var(--ungu, #E681FF);">Buy</button>

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