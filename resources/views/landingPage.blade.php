<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monaas</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/landingStyle.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
</head>
<body>
    <x-navbar/>
    <!-- Hero Section -->
    <section id="about-us" class="hero-section text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center jarum">
                    <a class="div btn btn-light fw-bold p-3 ps-5 pe-5 rounded-5 aboutus" href="/aboutus">
                        <div class="div-2">About Us <i class="fa-solid fa-syringe"></i></div>
                    </a>
                    <div class="mt-2 mb-4 slogan">
                        <h1 class="fw-bold">Rawat <span>kulitmu</span>,</h1>
                        <h1 class="fw-bold">rawat <span>kecantikanmu</span></h1>
                    </div>
                    <p class="mb-4 layanan">Kami memberikan layanan dan produk yang berkualitas serta bermanfaat bagi semua orang.</p>
                    {{-- image --}}

                    <div id="hero-carousel" class="carousel slide mb-5 diskon" data-bs-ride="carousel">
                        <div class="carousel-indicators" id="carousel">
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="rounded-circle active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" class="rounded-circle" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" class="rounded-circle" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner fw-bold">
                            <div class="carousel-item active c-item">
                                <strong>Special Birthday Discount %</strong>
                            </div>
                            <div class="carousel-item c-item">
                                <strong>Special Birthday Discount %</strong>
                            </div>
                            <div class="carousel-item c-item">
                                <strong>Special Birthday Discount %</strong>
                            </div>
                        </div>
                    </div> 

                    {{-- end of image --}}
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img src="{{ asset('img/Group 6.png') }}" id="gambar-depan" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section py-5">
        <div class="container">
            <h2 class="section-title font-katibeh">Produk Kami</h2>
            <div class="row">
                <!-- Product Item -->
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-3 mt-5">
                        <div class="card product-card">
                            <img src="\img\produk.jpg" class="card-img-top" alt="Body Lotion">
                            <div class="card-body p-4 ps-5">
                                <h5 class="card-title fs-6 fw-bold text-start">Body Lotion</h5>
                                <p class="card-text fs-6 fw-bold text-start">IDR 80.000,00</p>
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
            <h2 class="section-title font-katibeh"><hr>Treatment Kami</h2>
            <div class="row">
                <!-- Treatment Item -->
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-3 mt-5">
                        <div class="card product-card">
                            <img src="\img\gambar2.jpg" class="card-img-top" alt="Body Lotion">
                            <div class="card-body p-4 ps-5">
                                <h5 class="card-title fs-6 fw-bold text-start">Body Lotion</h5>
                                <p class="card-text fs-6 fw-bold text-start">IDR 80.000,00</p>
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
            <h2 class="section-title font-katibeh"><hr>Hubungi Kami</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa-solid fa-location-dot text-center mt-3" style="font-size: 45px;"></i>
                        </div>
                        <div class="col-11">
                            <h5 class="hubungi">Alamat Toko</h5>
                            <p class="hubungi-text">Jl. Sapen Raya, RT.7/RW.3, Penggaron Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fa-solid fa-phone-volume text-center mt-2" style="font-size: 35px;"></i>
                        </div>
                        <div class="col-11">
                            <h5 class="hubungi">Nomor Telepon</h5>
                            <p class="hubungi-text">085779205421</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fa-solid fa-calendar-days text-center mt-4" style="font-size: 45px;"></i>
                        </div>
                        <div class="col-11">
                            <h5 class="hubungi">Jam Operasional</h5>
                            <div class="row hubungi-text">
                                <div class="col-4 mb-0">Senin : 08.30 - 17.00</div>
                                <div class="col-4 mb-0">Selasa : 08.30 - 17.00</div>
                                <div class="col-4 mb-0">Rabu : 08.30 - 17.00</div>
                                <div class="col-4 mb-0">Kamis : 08.30 - 17.00</div>
                                <div class="col-4 mb-0">Jumat : 08.30 - 17.00</div>
                                <div class="col-4 mb-0">Sabtu : 08.30 - 01.00</div>
                                <div class="col-4 mb-0">Minggu : 08.30 - 17.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15840.174698414015!2d110.4878058!3d-7.0041401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d611e9e19db%3A0xd7efe6368e2f1d3!2sMONAAS%20SKINCARE%20%26%20HEALTHY!5e0!3m2!1sid!2sid!4v1717303594299!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <x-footer/>

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
    <script src="https://kit.fontawesome.com/58a88338f7.js" crossorigin="anonymous"></script>

</body>
</html>
