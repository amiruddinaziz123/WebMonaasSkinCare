@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>navbar edit</title>

    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/navbarAdmin.css') }}" />

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
    
    <div style="margin-top: 10vh; margin-left: 260px;">
        <h3 class="ms-3">before</h3>
        <nav class="navbar navbar-expand-lg" data-aos="fade-down" id="data-background">
            <div class="container-fluid">
                <a class="navbar-brand font-katibeh" href="/aboutus" data-aos="zoom-in" id="Judul"><img src="{{ asset('img/MonAAS 2.png') }}" id="icon" alt="logoMonaas" width="40px" class="imgLogo"></a>
                <button class="navbar-toggler" type="button" data-aos="fade-left" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLightNavbar" aria-controls="offcanvasLightNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-Light w-40" tabindex="-1" id="offcanvasLightNavbar" aria-labelledby="offcanvasLightNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body row">
                        {{-- Tampilan untuk perangkat mobile --}}
                        <div class="navbar-nav text-center col-12 d-md-none d-xl-none">
                            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="/product">Product</a>
                            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="/treatment">Treatment</a>
                            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="/booking">Booking</a>
                        </div>
                        {{-- Tampilan untuk perangkat tablet --}}
                        <div class="navbar-nav text-center col-12 col-md-12 d-none d-md-block d-xl-none">
                            <div class="row">
                                <div class="col-12">
                                    <a data-aos="fade-right" data-aos-offset="500" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/product">Product</a>
                                </div>
                                <div class="col-12">
                                    <a data-aos="fade-right" data-aos-offset="500" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/treatment">Treatment</a>
                                </div>
                                <div class="col-12">
                                    <a data-aos="fade-right" data-aos-offset="500" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/booking">Booking</a>
                                </div>
                            </div>
                        </div>
        
                        {{-- Tampilan untuk perangkat laptop --}}
                        <div class="navbar-nav text-center col-12 col-md-12 d-none d-md-none d-xl-block">
                            <a data-aos="fade-right" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/product">Product</a>
                            <a data-aos="fade-right" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/treatment">Treatment</a>
                            <a data-aos="fade-right" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/booking">Booking</a>
                        </div>
                    </div>            
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex justify-content-center" style="margin-left: 260px;">
        <img src="{{ asset('img/arrow-down.png') }}" alt="logoMonaas" width="40px" class="m-3">
    </div>

    <div style="margin-top: none; margin-left: 260px;">
        <h3 class="ms-3">after</h3>
        <nav class="navbar navbar-expand-lg gantiWarnaBG" data-aos="fade-down">
            <div class="container-fluid">
                <img src="" id="file-preview" width="40px" class="imgLogo">
                <a class="navbar-brand font-katibeh" id="preview-judul" href="/aboutus" data-aos="zoom-in"></a>
                <button class="navbar-toggler" type="button" data-aos="fade-left" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLightNavbar" aria-controls="offcanvasLightNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-Light w-40" tabindex="-1" id="offcanvasLightNavbar" aria-labelledby="offcanvasLightNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body row">
                        {{-- Tampilan untuk perangkat mobile --}}
                        <div class="navbar-nav text-center col-12 d-md-none d-xl-none">
                            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="/product">Product</a>
                            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="/treatment">Treatment</a>
                            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="/booking">Booking</a>
                        </div>
                        {{-- Tampilan untuk perangkat tablet --}}
                        <div class="navbar-nav text-center col-12 col-md-12 d-none d-md-block d-xl-none">
                            <div class="row">
                                <div class="col-12">
                                    <a data-aos="fade-right" data-aos-offset="500" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/product">Product</a>
                                </div>
                                <div class="col-12">
                                    <a data-aos="fade-right" data-aos-offset="500" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/treatment">Treatment</a>
                                </div>
                                <div class="col-12">
                                    <a data-aos="fade-right" data-aos-offset="500" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/booking">Booking</a>
                                </div>
                            </div>
                        </div>
        
                        {{-- Tampilan untuk perangkat laptop --}}
                        <div class="navbar-nav text-center col-12 col-md-12 d-none d-md-none d-xl-block">
                            <a data-aos="fade-right" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/product">Product</a>
                            <a data-aos="fade-right" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/treatment">Treatment</a>
                            <a data-aos="fade-right" class="nav-link active d-inline-block mx-auto" aria-current="page" style="font-family: Poppins;" href="/booking">Booking</a>
                        </div>
                    </div>            
                </div>
            </div>
        </nav>
    </div>

    <form action="{{ route('navbarAdmin.store') }}" method="POST" enctype="multipart/form-data" style="margin-left: 260px;">
        @csrf
        <div class="border p-4" id="div-form">
            <div class="row g-3">
                <h5 style="text-align: center;">Edit Navbar</h5>
                <div class="row">
                    <div class="col-sm-5">
                        <label for="file-input" class="w-100 text-md-end text-sm-start">Logo : </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="file" name="image" id="file-input" class="form-control" placeholder="Gambar" aria-label="Gambar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <label for="judul" class="w-100 text-md-end text-sm-start">Judul : </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" aria-label="Judul">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <label for="background" class="w-100 text-md-end text-sm-start">Background : </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="color" name="background_color" class="form-control" id="background" placeholder="Background" aria-label="Background">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
    

    {{-- <x-menu-admin/> --}}
    
    
    
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
        let assetUrl = `{{ asset('storage/img/${iconName}') }}`;
    
        icon.setAttribute('src', assetUrl);
    
        const dataBackground = document.getElementById('data-background');
    
        dataBackground.style.backgroundColor = dataNavbar[dataTerakir].background_color;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="{{ asset('js/navbarAdmin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
@endsection
