<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monaas AboutUs</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/aboutus.css">
  </head>
  <body>
    <div>
      <div class="header text-center align-items-center justify-content-center">
        <h1>About Us</h1>
      </div>

      <div class="container">
        <div class="row" style="margin-top: 90px">
          <div class="text-center align-items-center justify-content-center">
            <h2>Hasil <span class="pink">Maksimal</span>, Harga <span class="pink">Minimal</span></h2>
            <p class="mt-4">
              {{ $abouts->intro ?? 'Default intro text' }}
            </p>
          </div>
          <hr style="margin-top: 70px"> 

          <div class="col-md-6 mt-5 mb-5">
            <h2>Mengapa Harus <span class="pink">Monaas</span></h2>
            <p>
              {{ $abouts->reason ?? 'Default reason text' }}  
            </p>
          </div>

          <div class="col-md-6 mt-5 mb-5">
            <img src="{{ $abouts && $abouts->image ? '/img/' . $abouts->image : '/img/default-image.jpg' }}" alt="" class="w-100"> 
          </div>

          <div class="col-md-4 mt-5 mb-5 text-center align-items-center">
            <img src="{{ $abouts && $abouts->icon1 ? '/img/' . $abouts->icon1 : '/img/default-icon1.jpg' }}" alt="">
            <h5>{{ $abouts->tittle_icon1 ?? 'Default Title 1' }}</h5>
            <P>{{ $abouts->isi_icon1 ?? 'Default content for icon 1' }}</P>
          </div>

          <div class="col-md-4 mt-5 mb-5 text-center align-items-center">
            <img src="{{ $abouts && $abouts->icon2 ? '/img/' . $abouts->icon2 : '/img/default-icon2.jpg' }}" alt="">
            <H5>{{ $abouts->tittle_icon2 ?? 'Default Title 2' }}</H5>
            <p>{{ $abouts->isi_icon2 ?? 'Default content for icon 2' }}</p>
          </div>

          <div class="col-md-4 mt-5 mb-5 text-center align-items-center">
            <img src="{{ $abouts && $abouts->icon3 ? '/img/' . $abouts->icon3 : '/img/default-icon3.jpg' }}" alt="">
            <h5>{{ $abouts->tittle_icon3 ?? 'Default Title 3' }}</h5>
            <P>{{ $abouts->isi_icon3 ?? 'Default content for icon 3' }}</P>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
