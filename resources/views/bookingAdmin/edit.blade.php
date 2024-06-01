@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Booking Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
    <div class="card">
      <div class="card-body">
         
         <form action="{{ route('bookingAdmin.edit', $bookings->id) }}" method="POST" autocomplete="off" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <!-- Field Form -->
            <div class="mb-3 row">
                <label for="tanggal_booking" class="col-sm-2 col-form-label">Tanggal Booking</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('tanggal_booking') is-invalid @enderror" id="tanggal_booking" name="tanggal_booking" value="{{ old('tanggal_booking', $bookings->tanggal_booking) }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jam_booking" class="col-sm-2 col-form-label">Jam Booking</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control @error('jam_booking') is-invalid @enderror" id="jam_booking" name="jam_booking" value="{{ old('jam_booking', $bookings->jam_booking) }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_dokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" id="nama_dokter" name="nama_dokter" value="{{ old('nama_dokter', $bookings->nama_dokter) }}" required>
                </div>
            </div>
        
            <div class="col-12">
                <input type="submit" name="simpan" value="Save" class="btn btn-primary">
            </div>
        </form>
        
</div>

<style>
#content {
  width: 100%;
  padding: 20px;
  min-height: 100vh;
  transition: all 0.3s;
}

.mx-auto{
width:780px;
margin-top: 20px;
}

.card{
margin-top:10px;
}

/* Menghilangkan tombol scroll up dan down di input number */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>

<script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
const forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.from(forms).forEach(form => {
form.addEventListener('submit', event => {
 if (!form.checkValidity()) {
   event.preventDefault()
   event.stopPropagation()
 }

 form.classList.add('was-validated')
}, false)
})
})()
</script>

@endsection