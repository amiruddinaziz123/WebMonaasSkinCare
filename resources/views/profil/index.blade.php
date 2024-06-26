<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <!-- SweetAlert2 -->
   <link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    
</head>
<body>

  <x-navbar/>
    <div class="wrapper">
        <div class="user-card">
            
            <div class="user-card-img">
        

              <img src="\img\Rectangle.png" alt="">
            </div>
            <div class="user-card-info">
                
                <a href="{{ route('profil.edit', $user->id) }}" class="btn btn-secondary position-absolute top-0 end-0 m-3" role="button">
                    <i class="bi bi-pencil"></i>
                </a>
                

              <h2>{{ $user->username }}</h2>
              <p><span>Email:</span>{{ $user->email }}</p>
              <p><span>No. Telp:</span>{{ $user->no_telp }}</p>        
              <p><span>Password:</span>*********</p>
              <p><span>____________________________________________________</span></p>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="/prosesLogout" id="logout" class="nav-link text-danger" style="font-weight: bold">Logout</a>
            </li>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        const user = @json($user);
        const login = document.getElementById('login');
        if (user !== null) {
            login.innerHTML = "Hi " + user.username;
            login.href = "/profil";
        }
      </script>
    <script>
        document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default anchor action
            
            Swal.fire({
                title: "Yakin ingin logout?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, logout!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the logout URL
                    window.location.href = "/prosesLogout";
                }
            });
        });
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
