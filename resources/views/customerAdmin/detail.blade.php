@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Detail dari <span class="text-bold">{{ old('username_user', $customers->username_user) }}</span></h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control @error('email_user') is-invalid @enderror" id="email" name="email_user" value="{{ old('email_user', $customers->email_user) }}" disabled>
                                @error('email_user')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nisn" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('password_user') is-invalid @enderror" id="nisn" name="password_user" value="{{ old('password_user', $customers->password_user) }}" disabled>
                                @error('password_user')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('no_telp_user') is-invalid @enderror" id="telepon" name="no_telp_user" value="{{ old('no_telp_user', $customers->no_telp_user) }}" disabled>
                                @error('no_telp_user')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('customerAdmin.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
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