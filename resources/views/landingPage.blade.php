<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/landingStyle.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
</head>
<body>
    <x-navbar/>
    <!-- Hero Section -->
    <section id="about-us" class="hero-section text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-6 text-start">
                    <div class="mt-2 mb-4">
                        <h1>Rawat <span class="highlight">kulitmu</span>,</h1>
                        <h1>rawat <span class="highlight">kecantikanmu</span></h1>
                    </div>
                    <p class="mb-4">Kami memberikan layanan dan produk yang berkualitas serta bermanfaat bagi semua orang.</p>
                    {{-- image --}}

                    <div id="hero-carousel" class="carousel slide mb-5 diskon" data-bs-ride="carousel">
                        <div class="carousel-indicators" id="carousel">
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="rounded-circle active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" class="rounded-circle" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" class="rounded-circle" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active c-item">
                                <strong>Special Birthday Discount</strong>
                            </div>
                            <div class="carousel-item c-item">
                                <strong>Special Birthday Discount</strong>
                            </div>
                            <div class="carousel-item c-item">
                                <strong>Special Birthday Discount</strong>
                            </div>
                        </div>
                    </div> 

                    {{-- end of image --}}
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/Group 6.png') }}" id="gambar-depan" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section py-5">
        <div class="container">
            <h2 class="section-title">Produk Kami</h2>
            <div class="row">
                <!-- Product Item -->
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-3">
                        <div class="card product-card">
                            <img src="\img\produk.jpg" class="card-img-top" alt="Body Lotion">
                            <div class="card-body">
                                <h5 class="card-title">Body Lotion</h5>
                                <p class="card-text">IDR 80.000,00</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Treatments Section -->
    <section id="treatments" class="treatments-section py-5">
        <div class="container">
            <h2 class="section-title">Treatment Kami</h2>
            <div class="row">
                <!-- Treatment Item -->
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-3">
                        <div class="card product-card">
                            <img src="\img\gambar2.jpg" class="card-img-top" alt="Body Lotion">
                            <div class="card-body">
                                <h5 class="card-title">Body Lotion</h5>
                                <p class="card-text">IDR 80.000,00</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Alamat Toko</h5>
                    <p>Jl. Sapen Raya, RT.7/RW.3, Penggaron Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192.</p>
                    <h5>Nomor Telepon</h5>
                    <p>085779205421</p>
                    <h5>Jam Operasional</h5>
                    <p>Senin : 08.30 - 17.00<br>
                       Selasa : 08.30 - 17.00<br>
                       Rabu : 08.30 - 17.00<br>
                       Kamis : 08.30 - 17.00<br>
                       Jumat : 08.30 - 17.00<br>
                       Sabtu : 08.30 - 01.00<br>
                       Minggu : 08.30 - 17.00</p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9239.49985437372!2d110.48911374729117!3d-7.002182962587545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d0fbf3f6483%3A0xe8a9ad9f984a01f3!2sJl.%20Sapen%20Raya%2C%20Penggaron%20Kidul%2C%20Kec.%20Pedurungan%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1717110591980!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/landingScript.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
