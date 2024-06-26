@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hapus Permanent Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Hapus Permanent Product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title mt-1">Hapus Permanent Product <span class="text-bold">{{ old('foto_product', $products->nama_product) }}?</span></h3>
                </div>
                <form action="{{ route('productAdmin.destroy', $products->slug_link) }}" method="POST" autocomplete="off" class="needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('DELETE')
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-2 col-form-label">Foto Product</label>
                            <div class="col-sm-10">
                                <input readonly type="file" class="form-control" id="nama" name="foto_product" value="{{ old('foto_product', $products->foto_product) }}" style="display: none" required>
                                <img src="/img/{{ old('foto_product', $products->foto_product) }}" alt="" class="img-fluid" style="width: 500px; ">
                                @error('foto_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Product</label>
                            <div class="col-sm-10">
                                <input readonly type="text" class="form-control @error('nama_product') is-invalid @enderror" id="nama" name="nama_product" value="{{ old('nama_product', $products->nama_product) }}" required>
                                @error('nama_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="des" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input readonly type="text" class="form-control @error('description_product') is-invalid @enderror" id="des" name="description_product" value="{{ old('description_product', $products->description_product) }}" required>
                                @error('description_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input readonly type="number" class="form-control @error('harga_product') is-invalid @enderror" id="harga" name="harga_product" value="{{ old('harga_product', $products->harga_product) }}" required>
                                @error('harga_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <a href="{{ route('productAdmin.histori') }}" class="btn btn-primary ms-1">Kembali</a>
                    </div>
                    <input name="status_aktif" value="hapus" type="hidden">
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
