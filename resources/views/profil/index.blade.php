<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Customer</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />

</head>
<body>

  <x-navbar/>
    <div class="wrapper">
        <div class="user-card">
            <div class="user-card-img">
              <img src="\img\Rectangle.png" alt="">
            </div>
            <div class="user-card-info">
              <h2>{{ $accounts->username_user }}</h2>
              <p><span>Email:</span>{{ $accounts->email_user }}</p>
              <p><span>No. Telp:</span>{{ $accounts->no_telp_user }}</p>
              <p><span>____________________________________________________</span></p>
            </div>
        </div>
        
    </div>

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
    {{-- script --}}
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
