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
    <div class="table-responsive-sm">
      <div id="table">
        <table class="table table-striped bg-danger bg-opacity-75">
          <thead>
            <tr class="border-bottom">
              <th scope="col" class="text-center bg-danger bg-opacity-10">Hari</th>
              <td scope="col" class="text-center position-absolute start-50 translate-middle-x bg-transparent"><strong>Jam Booking</strong></td>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr id="row_hari"></tr>
          </tbody>
        </table>
      </div>
    </div>

    <h2 class="mt-5"><u>Booking Treatment</u></h2>
  
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
