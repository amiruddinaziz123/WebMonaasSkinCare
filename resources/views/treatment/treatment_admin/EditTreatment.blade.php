@extends('layouts/admin')

@section('content')


<div class="container">

        <form method="POST" action="{{ route('treatment_admin.update', $treatments->slug_link) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 row mt-5">
                <label for="foto" class="col-sm-2 col-form-label">Foto Treatment</label>
                <div class="col-sm-10">
                    @if ($treatments->foto_treatment)
                        <img src="{{ asset('storage/images/' . $treatments->foto_treatment)}}" alt="Monaas Skincare" class="img-fluid" style="width: 500px; margin-bottom: 15px;">
                    @else
                        <p>Tidak ada gambar yang tersedia</p>
                 @endif
                    <input required type="file" name="foto_treatment" class="form-control @error('foto_treatment') is-invalid @enderror" id="foto"  value="{{$treatments->foto_treatment}}">
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
                    <input required type="text" name="nama_treatment" class="form-control @error('nama_treatment') is-invalid @enderror" id="nmTreatment" placeholder="ex: Laser" value="{{$treatments->nama_treatment}}">
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
                    <input type="number" class="form-control @error('harga_treatment') is-invalid @enderror" name="harga_treatment" value="{{$treatments->harga_treatment}}" placeholder="Contoh: 100">
                    @error('harga_treatment')
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
                        <option selected>{{$treatments->status_publish}}</option>
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

            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div data-mdb-input-init class="col-sm-10 form-outline">
                    <textarea required type="text" name="description_treatment" class="form-control @error('description_treatment') is-invalid @enderror" id="deskripsi" rows="4">{{$treatments->description_treatment}}</textarea>
                    @error('description_treatment')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            {{-- <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input required type="text" name="description_treatment" class="form-control @error('description_treatment') is-invalid @enderror" id="deskripsi" value="{{$treatments->description_treatment}}">
                    @error('description_treatment')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div> --}}

            <div class="row mb-3 mt-5">
                <div class="col pinggir">
                        <button type="submit" name="aksi" value="edit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
                        <button type="reset" name="aksi" value="reset" class="btn btn-secondary"><i class="bi bi-repeat"></i> Reset </button>
                        <a href=" {{ route('treatment_admin.admin') }} " type="button" class="btn btn-danger"><i class="bi bi-arrow-left-square"></i> Batal </a>
                </div>
            </div>

        </form>

        <br><br><br>


</div>

<style>
    .pinggir {
        text-align: right;
    }
</style>

@endsection
