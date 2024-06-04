<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monaas Product</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
     <!-- SweetAlert2 -->
   <link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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
        
      @foreach ($products as $index => $pro)
        <div class="col">
          <div class="card rounded-5" style="box-shadow: 0px 193px 54px 0px rgba(120, 120, 120, 0.01), 0px 124px 49px 0px rgba(120, 120, 120, 0.04), 0px 69px 42px 0px rgba(120, 120, 120, 0.15), 0px 31px 31px 0px rgba(120, 120, 120, 0.26), 0px 8px 17px 0px rgba(120, 120, 120, 0.29);">
            <img src="/img/{{ $pro->foto_product }}" class="card-img-top rounded-top-5" alt="...">
            <div class="card-body">
              <h5 class="card-title mt-3">{{ $pro->nama_product }}</h5>
              <p class="card-text">{{ $pro->description_product }}</p>
            </div>
            <div class="mb-5 d-flex justify-content-around">
              <h3>Rp. {{ $pro->harga_product }}</h3>
              <a onclick="sendwhatsapp({{ $index }})"><button class="btn btn-primary text-white font-poppins fs-6" style="border-radius: 20px; background: #D9005B; border-color:#D9005B;">Buy Now</button></a>
            </div>
          </div>
        </div>
      @endforeach
    
      

    </div>
  </div>
  <x-footer/>

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

<script>
  @if(session('success'))
  Swal.fire({
      icon: 'success',
      title: 'Login Sukses',
      text: '{{ session('success') }}',
  });
@endif
</script>

{{-- untuk navbar --}}
<script>
  const dataNavbar = @json($navbars);
    
  const beforeJudul = document.getElementById('Judul');
  let dataTerakir = 0;
  for (let item = 0; item < dataNavbar.length; item++) {
      if (item > dataTerakir) {
          dataTerakir = item;
      }
  }
  beforeJudul.innerHTML = beforeJudul.innerHTML + dataNavbar[dataTerakir].judul;

  const icon = document.getElementById('icon');
  let iconName = dataNavbar[dataTerakir].image;

  console.log(iconName);
  let assetUrl = `/img/${iconName}`;

  icon.setAttribute('src', assetUrl);

  const dataBackground = document.getElementById('data-background');

  dataBackground.style.backgroundColor = dataNavbar[dataTerakir].background_color;
</script>

<script>
  function sendwhatsapp(index){
   var phonenumber = "6281229589745";
   const products = @json($products);
   const user =@json($user);
   var url = "https://wa.me/" + phonenumber + "?text="
   +"Nama Pembeli :" + user.username + "%0a"
   +"Nomor Telepon :" + user.no_telp + "%0a"
   +"Nama Produk : " + products[index].nama_product + "%0a"
   +"Harga : " + products[index].harga_product + "%0a"
   +"Halo min, saya ingin membeli produk ini";

   window.open(url, '_blank').focus();
 }
</script>

</body>
</html>
