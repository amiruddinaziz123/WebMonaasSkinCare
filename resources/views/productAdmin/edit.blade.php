@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title mt-1">Edit Product <span class="text-bold">{{ old('nama_product', $products->nama_product) }}</span></h3>
                </div>
                <form action="{{ route('productAdmin.editProduct', $products->slug_link) }}" method="POST" autocomplete="off" class="needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-2 col-form-label">Foto Product</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('foto_product') is-invalid @enderror" id="foto" name="foto_product" value="{{ old('foto_product', $products->foto_product) }}" required>
                                @error('foto_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Product</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama_product') is-invalid @enderror" id="nama" name="nama_product" value="{{ old('nama_product', $products->nama_product) }}" required>
                                @error('nama_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="des" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('description_product') is-invalid @enderror" id="des" name="description_product" required rows="3">{{ old('description_product', $products->description_product) }}</textarea>
                                @error('description_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('harga_product') is-invalid @enderror" id="harga" name="harga_product" value="{{ old('harga_product', $products->harga_product) }}" required>
                                @error('harga_product')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('productAdmin.index') }}" class="btn btn-primary ms-1">Kembali</a>
                    </div>
                    <input name="status_aktif" value="aktif" type="hidden">
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
