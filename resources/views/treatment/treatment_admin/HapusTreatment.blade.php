@extends('layouts/admin')

@section('content')


<div class="container">

        {{-- <div class="col-10">
            <a href="{{ route('Admin.admin') }}" class="btn btn-success btn-sm"> Produk</a> >>
            <a href="{{ route('Admin.history') }}" class="btn btn-dark btn-sm"> History</a>
        </div> --}}

        <form method="POST" action="{{ route('treatment_admin.softdelete', $treatments->slug_link) }}" enctype="multipart/form-data">
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

                    <input required type="file" name="foto_treatment" class="form-control @error('foto_treatment') is-invalid @enderror" id="foto"  value="{{ asset('storage/images/' . $treatments->foto_treatment)}}">
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
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input required type="text" name="description_treatment" class="form-control @error('description_treatment') is-invalid @enderror" id="deskripsi" value="{{$treatments->description_treatment}}">
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
                        <button type="submit" name="aksi" value="hapus" class="btn btn-info"><i class="bi bi-save"></i>Hapus</button>
                        <a href=" {{ route('treatment_admin.admin') }} " type="button" class="btn btn-danger">Batal </a>
                </div>
            </div>

        </form>

        <br><br><br>


</div>

@endsection
