<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monaas AboutUs</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/aboutus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
     <!-- SweetAlert2 -->
   <link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  </head>
  <body>
    <div>
      <x-navbar/>
      <div class="header text-center align-items-center justify-content-center">
        <h1>About Us</h1>
      </div>

      <div class="container">
        <div class="row" style="margin-top: 90px">
          <div class="text-center align-items-center justify-content-center">
            <h2>Hasil <span class="pink">Maksimal</span>, Harga <span class="pink">Minimal</span></h2>
            <p class="mt-4 abouts-text">
              {{ $abouts->intro ?? 'Default intro text' }}
            </p>
          </div>
          <hr style="margin-top: 70px"> 

          <div class="col-md-6 mt-5 mb-5 text-center text-md-start">
            <h2>Mengapa Harus <span class="pink">Monaas</span>?</h2>
            <p class="abouts-text">
              {{ $abouts->reason ?? 'Default reason text' }}  
            </p>
          </div>

          <div class="col-md-6 mt-5 mb-5">
            <img src="{{ $abouts && $abouts->image ? '/img/' . $abouts->image : '/img/default-image.jpg' }}" alt="" class="w-100"> 
          </div>

          <div class="col-md-4 mt-5 mb-5 text-center align-items-center">
            <img class="img-fluid" src="{{ $abouts && $abouts->icon1 ? '/img/' . $abouts->icon1 : '/img/default-icon1.jpg' }}" alt="" style="width: 50px" >
            <h5>{{ $abouts->tittle_icon1 ?? 'Default Title 1' }}</h5>
            <P class="abouts-icon">{{ $abouts->isi_icon1 ?? 'Default content for icon 1' }}</P>
          </div>

          <div class="col-md-4 mt-5 mb-5 text-center align-items-center">
            <img class="img-fluid" src="{{ $abouts && $abouts->icon2 ? '/img/' . $abouts->icon2 : '/img/default-icon2.jpg' }}" alt="" style="width: 50px" >
            <H5>{{ $abouts->tittle_icon2 ?? 'Default Title 2' }}</H5>
            <p class="abouts-icon">{{ $abouts->isi_icon2 ?? 'Default content for icon 2' }}</p>
          </div>

          <div class="col-md-4 mt-5 mb-5 text-center align-items-center">
            <img class="img-fluid" src="{{ $abouts && $abouts->icon3 ? '/img/' . $abouts->icon3 : '/img/default-icon3.jpg' }}" alt="" style="width: 50px" >
            <h5>{{ $abouts->tittle_icon3 ?? 'Default Title 3' }}</h5>
            <P class="abouts-icon">{{ $abouts->isi_icon3 ?? 'Default content for icon 3' }}</P>
          </div>
        </div>
      </div>
    </div>
    <x-footer/>

    <script>
      @if(session('success'))
      Swal.fire({
          icon: 'success',
          title: 'Login Sukses',
          text: '{{ session('success') }}',
      });
      @endif
  </script>

    <script>
      // mempasing data 
      const dataNavbar = @json($navbars);
      console.log(dataNavbar);

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
