@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                </div>
                <form action="{{ route('masterAdmin.store') }}" method="POST" autocomplete="off" class="needs-validation"  novalidate>
                @csrf
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="nama" name="username" required>
                            </div>
                         </div>
             
                         <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                               <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                         </div>
             
                         <div class="mb-3 row">
                            <label for="nisn" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="nisn" name="password" required> 
                            </div>
                         </div>
             
                         <div class="mb-3 row">
                             <label for="telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                             <div class="col-sm-10">
                                 <input type="number" class="form-control" id="telepon" name="no_telp" required>
                             </div>
                         </div>
                    </div>
                    <div class="card-footer">
                       <button type="submit" class="btn btn-success ms-1">Tambah</button>
                       <button type="reset" class="btn btn-danger ms-1">Reset</button>
                       <a href="{{ route('customerAdmin.index') }}" class="btn btn-primary ms-1">Kembali</a>
                    </div>
                    <input name="status_aktif" value="Aktif" type="hidden">
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

    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            html: '<ul class="text-decoration-none list-unstyled">{!! implode("", $errors->all("<li>:message</li>")) !!}</ul>',
        });
    </script>
    @endif

@endsection
