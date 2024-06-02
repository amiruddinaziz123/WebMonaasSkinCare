@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hapus Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hapus Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title mt-1">Hapus data <span class="text-bold">{{ old('username', $customers->username) }}?</span></h3>
                </div>
                <form action="{{ route('customerAdmin.softdeleted', $customers->slug_link) }}" method="POST" autocomplete="off" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control @error('username') is-invalid @enderror" id="email" name="username" value="{{ old('username', $customers->username) }}" required>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input readonly type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $customers->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nisn" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control @error('password') is-invalid @enderror" id="nisn" name="password" value="{{ old('password', $customers->password) }}" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                        <div class="col-sm-10">
                            <input readonly type="number" class="form-control @error('no_telp') is-invalid @enderror" id="telepon" name="no_telp" value="{{ old('no_telp', $customers->no_telp) }}" required>
                            @error('no_telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                    <div class="card-footer">
                       <button type="submit" class="btn btn-danger">Hapus</button>
                       <a href="{{ route('customerAdmin.index') }}" class="btn btn-primary ms-1">Kembali</a>
                    </div>
                    <input name="status_aktif" value="Hapus" type="hidden">
                </form>
            </div>
        </div>
    </section>

<style>

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

@endsection