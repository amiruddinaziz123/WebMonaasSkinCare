@extends('layouts/admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Treatment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Treatment</li>
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
                <form method="POST" action="{{ route('treatment_admin.store') }}" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                @csrf
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-2 col-form-label">Foto Treatment</label>
                            <div class="col-sm-10">
                               <input type="file" class="form-control" id="foto" name="foto_treatment" required>
                            </div>
                         </div>
             
                         <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Treatment</label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="nama" name="nama_treatment" required>
                            </div>
                         </div>
             
                         <div class="mb-3 row">
                            <label for="des" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="des" name="description_treatment" rows="3"></textarea>
                            </div>
                         </div>
             
                         <div class="input-group">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga_treatment" required>
                            <span class="input-group-text">.000</span>
                          </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="bi bi-plus-square"></i> Tambah</button>
                        <button type="reset" name="aksi" value="reset" class="btn btn-secondary"><i class="bi bi-repeat"></i> Reset</button>
                        <a href=" {{ route('treatment_admin.admin') }} " type="button" class="btn btn-danger"><i class="bi bi-arrow-left-square"></i> Batal</a>
                    </div>
                    <input name="status_aktif" value="aktif" type="hidden">
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("harga").addEventListener("input", function() {
            if (this.value.length > 7) {
                this.value = this.value.slice(0, 7);
            }
        });
    </script>

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
