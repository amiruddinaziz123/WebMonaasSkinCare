{{-- <link rel="stylesheet" href="{{ asset('css/footer.css') }}" /> --}}
{{-- tambahkan ke <head> halaman yang ingin diberi component footer --}}

    <div class="container-fluid p-5 overflow-hidden" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" style="background-color: #D9005B">
        <div class="row">
            <div class="col-sm-12 col-md-1 col-lg-1 pe-0" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom">
                <div class="nav justify-content-end">
                    <img loading="lazy" class="m-3 me-0" src="{{ asset('img/logoMonaas.png') }} " width="120px"/>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom">
                <h1 class="text-white font-katibeh">Monaas Skincare</h1>
                <div class="d-flex flex-column font-poppins row" style="font-size: 15px">
                    <div class="row mt-2">
                        <div class="col-md-1 col-sm-2">
                            <img src="{{ asset('img/fb_logo.png') }}" width="30px"/>
                        </div>
                        <div class="text-white col-md-11 col-sm-10 mt-2" style="display: contents;"><a href="#">monaasskincare</a></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1 col-sm-2">
                            <img src="{{ asset('img/ig_logo.png') }}" width="30px"/>
                        </div>
                        <div class="text-white col-md-11 col-sm-10 mt-2" style="display: contents;"><a href="#">monaasskincare</a></div>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-between text-light row-sm">
                        <a href="/aboutus" class="nav-link active" style="font-family: Poppins;">About Us</a>
                        <div class="garis">|</div>
                        <a href="/product" class="nav-link active" style="font-family: Poppins;">Product</a>
                        <div class="garis">|</div>
                        <a href="/treatment" class="nav-link active" style="font-family: Poppins;">Treatment</a>
                        <div class="garis">|</div>
                        <a href="/booking" class="nav-link active" style="font-family: Poppins;">Booking</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-white" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">© 2023 Monaas Skincare. Powered by Monaas Skincare</div>
    </div>
    <div class="container-fluid overflow-hidden" id="spaceForBottom" style="background-color: #A6003F ">
    </div>