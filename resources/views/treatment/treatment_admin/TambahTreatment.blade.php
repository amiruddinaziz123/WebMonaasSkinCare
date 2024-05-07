@extends('layouts/admin')

@section('content')


<div class="container">

        {{-- <div class="col-10">
            <a href="{{ route('Admin.admin') }}" class="btn btn-success btn-sm"> Produk</a> >>
            <a href="{{ route('Admin.history') }}" class="btn btn-dark btn-sm"> History</a>
        </div> --}}


        <form method="POST" action="{{ route('treatment_admin.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 row mt-5">
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
                    <input required type="text" name="nama_treatment" class="form-control @error('nama_treatment') is-invalid @enderror" id="nmTreatment" placeholder="ex: Laser" value="">
                    @error('nama_treatment')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input required type="text" name="description_treatment" class="form-control @error('description_treatment') is-invalid @enderror" id="deskripsi" value="">
                    @error('description_treatment')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>


            <div class="form-group mb-3 row">
                <label for="status" class="font-weight-bold col-sm-2 col-form-label">Status Publish</label>
                <div class="col-sm-10">
                    <select required name="status_publish" id="status" class="form-control @error('status_publish') is-invalid @enderror">
                        <option value=""></option>
                        <option value="Draft">Draft</option>
                        <option value="Publish">Publish</option>
                    </select>
                    @error('status_publish')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 mt-5">
                <div class="col">
                        {{-- <button type="submit" name="aksi" value="edit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button> --}}
                        <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="bi bi-plus-square"></i> Tambah</button>
                        <button type="reset" name="aksi" value="reset" class="btn btn-secondary"><i class="bi bi-repeat"></i> Reset</button>
                        <a href=" {{ route('treatment_admin.admin') }} " type="button" class="btn btn-danger"><i class="bi bi-arrow-left-square"></i> Batal</a>
                </div>
            </div>

        </form>


</div>

@endsection
