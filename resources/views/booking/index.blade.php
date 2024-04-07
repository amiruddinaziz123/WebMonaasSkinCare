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
    <div class="contianer ps-5 pe-5 pt-4 mb-5">
      <div class="calendar">
        <div class="calendar-header">
          <span class="month-picker" id="month-picker"> May </span>
          <div class="year-picker" id="year-picker">
            <span class="year-change" id="pre-year">
              <pre><</pre>
            </span>
            <span id="year">2020 </span>
            <span class="year-change" id="next-year">
              <pre>></pre>
            </span>
          </div>
        </div>

        <div class="calendar-body">
          <div class="calendar-week-days">
            <div>Min</div>
            <div>Sen</div>
            <div>Sel</div>
            <div>Rab</div>
            <div>Kam</div>
            <div>Jum</div>
            <div>Sab</div>
          </div>
          <div class="calendar-days">
          </div>
        </div>
        <div class="calendar-footer">
        </div>
        <div class="date-time-formate">
          <div class="day-text-formate">TODAY</div>
          <div class="date-time-value">
            <div class="time-formate">01:41:20</div>
            <div class="date-formate">03 - march - 2022</div>
          </div>
        </div>
        <div class="month-list"></div>
      </div>
      <div class="select-hour row">
        <div class="select-hour-header col-12 sticky-top">
          Pilih Jam Untuk Treatment
        </div>
        <div class="form-group container border border-bottom-0 border-2 rounded col-12">
          <div class="row" id="daftar-jam-booking">

          </div>
        </div>
      </div>
    </div>




    <div class="hasil p-1 border border-2">
        <div class="container">
          <h5 class="ms-4 mt-4 nav justify-content-center">Buat jadwal treatment</h5>
          <form action="{{ route('booking.store') }}" method="POST" class="row">
            @csrf
        
            <div class="form-floating col-3">
              <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Nama" required>
              <label for="nama_user" class="ms-3">Nama:</label>
            </div>
            <div class="form-floating col-3">
              <input type="text" name="no_telp" id="no_telp" minlength="12" maxlength="14" class="form-control" placeholder="No Telp" required>
              <label for="no_telp" class="ms-3">No Telp:</label>
            </div>
            <div class="form-floating col-2">
              <input type="date" name="tanggal_booking" id="tanggal_booking" class="form-control tanggal-dipilih" required>
              <label for="tanggal_booking" class="ms-3">Tanggal Dipilih:</label>
            </div>
            <div class="form-floating col-2">
              <input type="time" name="jam_booking" id="jam_booking" class="form-control tanggal-dipilih" required>
              <label for="jam_booking" class="ms-3">Jam Dipilih:</label>
            </div>
            
            <div class="form-floating col-3">
                <select name="nama_dokter" id="nama_dokter" class="form-control" required>
                    @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->nama_dokter }}">{{ $dokter->nama_dokter }}</option>
                    @endforeach
                </select>
                <label for="nama_dokter" class="ms-3">Dokter:</label>
            </div>
            <div class="form-group col-12 mt-2 nav justify-content-center">
              <button class="btn btn-primary col-2" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    

    <script>
      // mempasing data dokter ke file booking.js
      const dokterData = @json($dokters);
      const jamBookingData = @json($jamBookings);

      console.log(dokterData);
      console.log(jamBookingData);
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
