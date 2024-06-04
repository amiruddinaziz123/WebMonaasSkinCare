{{-- <link rel="stylesheet" href="{{ asset('css/footer.css') }}" /> --}}
{{-- tambahkan ke <head> halaman yang ingin diberi component footer --}}

    <div class="container-fluid p-5 overflow-hidden" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" style="background-color: #DF6F9E">
        <div class="row footer">
            <div class="col-sm-12 col-lg-1 col-lg-1 pe-0 pembungkus" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom">
                <div class="nav" id="logo">
                    <img loading="lazy" src="{{ asset('img/logoMonaas.png') }} " width="120px"/>
                </div>
            </div>
            <div class="element col-sm-12 col-lg-5 col-lg-5 pembungkus" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom">
                <h1 class="text-white font-katibeh">Monaas Skincare</h1>
                <div class="d-flex flex-column font-poppins row" style="font-size: 15px">
                    <div class="row mt-2 center">
                        <div class="col-lg-1 col-sm-12 center">
                            <img src="{{ asset('img/fb_logo.png') }}" width="30px"/>
                        </div>
                        <div class="text-white col-lg-11 col-sm-12 mt-2" style="display: contents;"><a href="https://www.facebook.com/monaasskincare?mibextid=ZbWKwL" style="text-decoration: none; color: white;">Monaas Skincare</a></div>
                    </div>
                    <div class="row mt-2 center">
                        <div class="col-lg-1 col-sm-12 center">
                            <img src="{{ asset('img/ig_logo.png') }}" width="30px"/>
                        </div>
                        <div class="text-white col-lg-11 col-sm-12 mt-2" style="display: contents;"><a href="https://www.instagram.com/monaasskincare?igsh=ZHlhN21udnViNGli" style="text-decoration: none; color: white;">monaasskincare</a></div>
                    </div>
                </div>
                
            </div>
            <div class="element col-sm-12 col-lg-6 col-lg-6 pembungkus" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-between text-light row-sm">
                        <a href="/aboutus" class="nav-link active" style="font-family: Poppins; text-decoration: none; color: white; ">About Us</a>
                        <div class="garis">|</div>
                        <a href="/product" class="nav-link active" style="font-family: Poppins; text-decoration: none; color: white; ">Product</a>
                        <div class="garis">|</div>
                        <a href="/treatment" class="nav-link active" style="font-family: Poppins; text-decoration: none; color: white; ">Treatment</a>
                        <div class="garis">|</div>
                        <a href="/booking" class="nav-link active" style="font-family: Poppins; text-decoration: none; color: white; ">Booking</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-white" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">© 2023 Monaas Skincare. Powered by Monaas Skincare</div>
    </div>
    <div class="container-fluid overflow-hidden" id="spaceForBottom" style="background-color: #DF6F9E ">
    </div>