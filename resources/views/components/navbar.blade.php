{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/component.css') }}" /> --}}
{{-- tambahkan ke <head> halaman yang ingin diberi component navbar --}}

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> --}}
{{-- tambahkan ke <body> halaman yang ingin diberi component navbar --}}





<nav class="navbar navbar-expand-lg bg-body-tertiary" data-aos="fade-down">
    <div class="container-fluid">
        <a class="navbar-brand font-katibeh" href="#" data-aos="zoom-in"><img src="{{ asset('img/MonAAS 2.png') }}" alt="logoMonaas" width="40px" class="imgLogo">Monaas</a>
        <button class="navbar-toggler" type="button" data-aos="fade-left" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse font-poppins position-absolute top-50 start-50 translate-middle" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="#">Product</a>
            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="#">Treatment</a>
            <a data-aos="fade-right" data-aos-offset="500" class="nav-link active" aria-current="page" style="font-family: Poppins;" href="#">Booking</a>
            </div>
        </div>
        <div>
            <a href="#" class="icon-btn"><ion-icon data-aos="fade-left" data-aos-offset="500" class="rounded-circle" name="search"></ion-icon></a>
            <a href="#" class="icon-btn"><ion-icon data-aos="fade-left" data-aos-offset="500" class="rounded-circle" name="person-outline"></ion-icon></a>
        </div>
    </div>
</nav>