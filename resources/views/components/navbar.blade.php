{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}" /> --}}
{{-- tambahkan ke <head> halaman yang ingin diberi component navbar --}}

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> --}}
{{-- tambahkan ke <body> halaman yang ingin diberi component navbar --}}

<nav class="navbar navbar-expand-lg" data-aos="fade-down"id="data-background">
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
