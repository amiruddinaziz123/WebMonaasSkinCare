@extends('layouts/admin')

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

    <div class="container">

        {{-- <div class="col-10">
            <a href="{{ route('Admin.admin') }}" class="btn btn-success btn-sm"> Produk</a> >>
            <a href="{{ route('Admin.history') }}" class="btn btn-dark btn-sm"> History</a>
        </div> --}}


        <form method="POST" action="{{ route('treatment_admin.store') }}" enctype="multipart/form-data">
            @csrf

            <br><br>
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto Treatment</label>
                <div class="col-sm-10">
                    <input required type="file" name="foto_treatment" class="form-control @error('foto_treatment') is-invalid @enderror" id="foto"  value="">
                    @error('foto_treatment')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row mt-3">
                <label for="nmTreatment" class="col-sm-2 col-form-label">Nama Treatment</label>
                <div class="col-sm-10">
                    <input required type="text" name="nama_treatment" class="form-control @error('nama_treatment') is-invalid @enderror" id="nmTreatment" placeholder="Contoh: Laser" value="">
                    @error('nama_treatment')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>


        <div class="form-group mb-3 row">
            <label for="harga" class="font-weight-bold col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control @error('harga_treatment') is-invalid @enderror" name="harga_treatment" placeholder="Contoh: 100">
                @error('harga_treatment')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
            @enderror
            </div>
        </div>

            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div data-mdb-input-init class="col-sm-10 form-outline">
                    <textarea required type="text" name="description_treatment" class="form-control @error('description_treatment') is-invalid @enderror" id="deskripsi" rows="4" value=""></textarea>
                    @error('description_treatment')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 mt-5">
                <div class="col pinggir">
                        {{-- <button type="submit" name="aksi" value="edit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button> --}}
                        <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="bi bi-plus-square"></i> Tambah</button>
                        <button type="reset" name="aksi" value="reset" class="btn btn-secondary"><i class="bi bi-repeat"></i> Reset</button>
                        <a href=" {{ route('treatment_admin.admin') }} " type="button" class="btn btn-danger"><i class="bi bi-arrow-left-square"></i> Batal</a>
                </div>
            </div>

        </form>


</div>

<style>
    .pinggir{
        text-align: right;
    }
</style>

@endsection

