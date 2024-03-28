<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Booking</title>

    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/component.css') }}" />

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

  </head>
  <body class="antialiased">
    <x-navbar/>
    
    <div class="mt-5 ms-4 me-4 p-3" id="table">
      {{-- header table --}}
      <div class="text-center ms-2 me-2">
        <div class="row bg-transparent">
          <div class="table-head col-1 border-color-pink-1 d-flex align-items-center justify-content-center">
            <table_head>Hari</table_head>
          </div>
          <div class="table-head col-8 border-color-pink-1 d-flex align-items-center justify-content-center">
            <table_head>Jam Dokter</table_head>
          </div>
          <div class="table-head col-3 border-color-pink-1 d-flex align-items-center justify-content-center">
            <table_head>Tindakan</table_head>
          </div>
        </div>
      </div>
      {{-- header table --}}
      {{-- ================================ --}}
      {{-- body table --}}
      <div class="text-center ms-2 me-2">
        <hire id="senin"></hire>
        {{-- <div class="row bg-transparent">
          <div class="col-1 border-color-pink-1 d-flex align-items-center justify-content-center">
            <table_child>Senin<table_child>
          </div>
          <div class="col-8 border-color-pink-1 d-flex align-items-center justify-content-center">
            <div class="container text-center">
              <div class="row">
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
              </div>
            </div>
          </div>
          <div class="col-3 border-color-pink-1 d-flex align-items-center justify-content-center">
            <div class="container text-center">
              <div class="row">
                <button class="col btn m-2 btn-success focus-ring py-1">Tambah</button>
                <button class="col btn m-2 btn-warning focus-ring py-1">Edit</button>
                <button class="col btn m-2 btn-danger focus-ring py-1">Hapus</button>
              </div>
            </div>
          </div>
        </div> --}}

        

      </div>
      {{-- body table --}}
    </div>




























    <h2 class="mt-5">Booking Treatment</h2>
    <hr>
  
    <div class="container text-center p-5">
      <div class="row justify-content-center ms-5 me-5">
        <div class="col-4 border p-3 w-50">
          <div class="p-4">
            <h5 class="text-start">Pilih Treatment</h5>
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Peeling" id="Peeling">
                    <label class="form-check-label" for="Peeling">
                      Peeling
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Sliming" id="Sliming">
                    <label class="form-check-label" for="Sliming">
                      Sliming
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Meso Cell" id="Meso Cell">
                    <label class="form-check-label" for="Meso Cell">
                      Meso Cell
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Infuso Whitening" id="Infuso Whitening">
                    <label class="form-check-label" for="Infuso Whitening">
                      Infuso Whitening
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Laser" id="Laser">
                    <label class="form-check-label" for="Laser">
                      Laser
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 border p-3 w-50">
          <div class="p-4">
            <h5 class="text-start">Pilih Jam</h5>
          </div>
        </div>
      </div>
    </div>

    <script>
      // mempasing data dokter ke file booking.js
      const dokterData = @json($dokters);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="{{ asset('js/booking.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
