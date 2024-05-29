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
    <link rel="stylesheet" href="/css/produk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   {{-- <script src="/js/product.js"></script> --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
  <x-navbar/>  

  {{-- image --}}

  <div id="hero-carousel" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="/img/produk.jpg" class="d-block w-100 c-img" alt="Slide 1">
      </div>
      <div class="carousel-item c-item">
        <img src="/img/kekeye.png" class="d-block w-100 c-img" alt="Slide 2">
      </div>
      <div class="carousel-item c-item">
        <img src="/img/gambar1.jpg" class="d-block w-100 c-img" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 

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

  <div class="container py-5">
    <h1 style="font-size: 70px;">OUR PRODUCT</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        
        @foreach ($products as $pro)
            <div class="col">
        <div class="card">
            <img src="/img/{{ $pro->foto_product }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mt-3">{{ $pro->nama_product }}</h5>
                <p class="card-text">{{ $pro->description_product }}</p>
            </div>
            <div class="mb-5 d-flex justify-content-around">
                <h3>{{ $pro->harga_product }}</h3>
                <a href="https://wa.me/0882003366832?text=pesan product pada nomor 0882003366832"><button class="btn btn-primary" style="border-radius: 20px">Buy Now</button></a>
            </div>
        </div>
        </div>
        @endforeach
      

    </div>
  </div>

  {{-- end of card --}}

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

</body>
</html>
