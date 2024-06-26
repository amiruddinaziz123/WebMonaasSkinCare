@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Login Register</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Login Register</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="{{ asset('css/login.css') }}">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <title>Document</title>
            </head>
            <body>
                <div class="container d-flex justify-content-center align-items-center min-vh-100">
                    <div class="row border rounded-5 p-3 shadow box">
                      <div class="rounded-4 d-flex justify-content-center align-items-center flex-column left">
                        <div class="image mt-5">
                            @if($logsigns && $logsigns->image)
                                <img src="/img/{{ $logsigns->image }}" alt="" class="img-fluid mb-3 ms-5" style="width: 300px">
                            @else
                                <img src="/img/default-image.jpg" alt="Default Image" class="img-fluid mb-3 ms-5" style="width: 300px">
                            @endif
                        </div>
                        <p class="text-white text ms-5">{{ $logsigns->text ?? 'Default text' }}</p>
                        <form action="{{ route('logsignAdmin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="text">Text</label>
                                <textarea class="form-control" id="text" name="text" rows="3">{{ $logsigns->text ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        </form>
                    </div>
                    
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </body>
            </html>

        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection
