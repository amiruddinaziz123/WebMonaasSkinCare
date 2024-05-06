@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
    <div class="card">
      <div class="card-body">
         
         <form action="{{ route('masterAdmin.store') }}" method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf
            
            <div class="mb-3 row">
               <label for="nama" class="col-sm-2 col-form-label">Username</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="username_user" placeholder="Isi Username" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email_user" placeholder="Isi Email" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="nisn" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="nisn" name="password_user" placeholder="Isi Password" required> 
               </div>
            </div>

            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="no_telp_user" placeholder="Isi Nomor" required>
                </div>
            </div>


            {{-- <div class="mb-3 row">
               <label for="angkatan" class="col-sm-2 col-form-label">Tahun Angkatan</label>
               <div class="col-sm-10">
                 <select class="form-control" name="angkatan" id="jurusan" required>
                     <option>Pilih Angkatan</option>
                     @foreach ($tahun_angkatan as $ta)
                         <option value="{{ $ta->tahun_angkatan }}">
                             {{ $ta->tahun_angkatan }}
                         </option>
                     @endforeach
                  </select>
                 </select>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
               <div class="col-sm-10">
                  <select class="form-control" name="jurusan" id="jurusan" required>
                  <option>Pilih Jurusan</option>
                     @foreach ($kode_jurusan as $kj)
                         <option value="{{ $kj->kode_jurusan }}">
                             {{ $kj->kode_jurusan }}
                         </option>
                     @endforeach
                  </select>
               </div>
            </div> --}}

            <div class="col-12">
               <input type="submit" name="simpan" value="Tambah" class="btn btn-primary">
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

<script>
    document.getElementById("telepon").addEventListener("input", function() {
        if (this.value.length > 15) {
            this.value = this.value.slice(0, 15);
        }
    });
  </script>

<script>
    document.getElementById("telepon").addEventListener("input", function() {
        // Menghilangkan karakter non-numeric, kecuali '+' untuk awalan
        this.value = this.value.replace(/[^0-9+]/g, '');
    });
</script>
@endsection