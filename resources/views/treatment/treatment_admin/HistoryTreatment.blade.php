@extends('treatment/layout')

@section('content')

<div class="row justify-content-center text-center">
    <div class="col-12 mt-4 mb-5">
        <h1>OUR TREATMENT</h1>
    </div>

    <div class="col-12">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th data-priority="1">No</th>
                    <th>Foto Treatment</th>
                    <th data-priority="1">Nama Treatment</th>
                    <th data-priority="1">Deskripsi</th>
                    <th data-priority="1">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($treatments as $no => $treat)

                <tr>
                    <td>{{++$no}}</td>
                    <td> <img src="{{ asset('storage/images/' . $treat->foto_treatment)}}" class="card-img-top" alt="..." style="width: 160px;"> </td>
                    <td> {{ $treat->nama_treatment}} </td>
                    <td> {{ $treat->description_treatment }} </td>

                    <td>
                        <form onsubmit="return confirm('Yakin ingin mempublish ini ?');" action="{{ route('treatment_admin.restore', ['slug_link' => $treat->slug_link]) }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-primary btn-sm mt-2">
                                <i class="bi bi-box-arrow-left"></i> Restore
                            </button>
                        </form>

                        <form onsubmit="return confirm('Yakin ingin menghapus ini ?');" action="{{ route('treatment_admin.deletePermanent', $treat->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm mt-2">
                                <i class="bi bi-trash3"></i> Delete Permanent
                            </button>
                        </form>
                    </td>

                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Foto Treatment</th>
                    <th>Nama Treatment</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
