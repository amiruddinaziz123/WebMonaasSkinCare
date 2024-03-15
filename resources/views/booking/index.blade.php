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

    ridho

    <div id="table">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Hari</th>
            <th scope="col" colspan="3" class="text-center">Jam Booking</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" id="senin">Senin</th>
              
          </tr>
          <tr>
            <th scope="row">Selasa</th>

          </tr>
          <tr>
            <th scope="row">Rabu</th>

          </tr>

          @forelse ($dokters as $dokter)
          <tr>
              <td class="text-center">
                  <h1>{{ route('dokters.show', $dokter->id) }}</h1>
              </td>
          </tr>
          @empty
              <div class="alert alert-danger">
                  Data dokter belum Tersedia.
              </div>
          @endforelse
        </tbody>
      </table>
    </div>
    <script>
      var dokterData = @json($dokters);
    </script>
    <script src="{{ asset('js/booking.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
