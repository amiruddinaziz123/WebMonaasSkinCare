@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About Us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Us</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            
          <!-- /.row -->
          <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>about us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/aboutus.css">
</head>
  <body>
    <div style="background-color: white">
        <div class="header text-center align-items-center justify-content-center">
           <h1>About Us</h1>
        </div>

        <div class="container">
          <div class="row" style="margin-top: 90px">
            
            <div class="text-center align-items-center justify-content-center">
              <h2>Hasil <span>Maksimal</span>, Harga <span>Minimal</span></h2>
              <p class="mt-4" style="color: black">
                {{ $abouts->intro }}
              </p>
            </div>

            <hr style="margin-top: 70px"> 

            <div class="col-md-6 mt-5 mb-5">
              <h2>Mengapa Harus <span>Monaas</span></h2>
              <p style="color: black">
                {{ $abouts->reason }}  
              </p>
            </div>

            <div class="col-md-6 mt-5 mb-5">
              <img src="/img/{{ $abouts->image }}" alt="" class="w-100"> 
            </div>

            <div class="col-md-4 mt-5 mb-5 text-center align-items-center" style="color: black">
              <img src="/img/{{ $abouts->icon1 }}" alt="">
              <h5>{{ $abouts->tittle_icon1 }}</h5>
              <P>{{ $abouts->isi_icon1 }}</P>
            </div>

            <div class="col-md-4 mt-5 mb-5 text-center align-items-center" style="color: black">
              <img src="/img/{{ $abouts->icon2 }}" alt="">
              <H5>{{ $abouts->tittle_icon2 }}</H5>
              <p>{{ $abouts->isi_icon2 }}</p>
            </div>

            <div class="col-md-4 mt-5 mb-5 text-center align-items-center" style="color: black">
              <img src="/img/{{ $abouts->icon3 }}" alt="">
              <h5>{{ $abouts->tittle_icon3 }}</h5>
              <P>{{ $abouts->isi_icon3 }}</P>
            </div>
            
          </div>


        </div>
    </div>

    <div class="col-sm-6 mt-5">
      <h1 class="m-0 h2">Edit Tampilan</h1>
    </div>
    <form action="">
      @csrf
      <div class="form-group mt-4">
        <label for="text">Intro</label>
        <textarea class="form-control" id="text" name="text" rows="3">{{ $abouts->intro }}</textarea>
     </div>
  
     <div class="form-group mt-4">
      <label for="text">Reason</label>
      <textarea class="form-control" id="text" name="text" rows="3">{{ $abouts->intro }}</textarea>
   </div>
  
   <div class="form-group mt-4">
    <label for="text" class="form-label d-block">Image</label>
    <label for="formFile" class="form-label mb-3"><img src="/img/{{ $abouts->image }}" alt="" style="width: 200px"></label>
    <input class="form-control" type="file" id="formFile">
  </div>
  
   <div class="form-group mt-4">
    <label for="text" class="form-label d-block">Icon 1</label>
    <label for="formFile" class="form-label mb-3"><img src="/img/{{ $abouts->icon1 }}" alt="" style="width: 50px"></label>
    <input class="form-control" type="file" id="formFile">
  </div>
  
  <div class="form-group mt-4">
    <label for="exampleFormControlInput1" class="form-label">Tittle 1</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $abouts->tittle_icon1 }}">
  </div>
  
  <div class="form-group mt-4">
    <label for="text">Isi 1</label>
    <textarea class="form-control" id="text" name="text" rows="3">{{ $abouts->isi_icon1 }}</textarea>
  </div>
  
  <div class="form-group mt-4">
    <label for="text" class="form-label d-block">Icon 2</label>
    <label for="formFile" class="form-label mb-3"><img src="/img/{{ $abouts->icon2 }}" alt="" style="width: 50px"></label>
    <input class="form-control" type="file" id="formFile">
  </div>
  
  <div class="form-group mt-4">
    <label for="exampleFormControlInput1" class="form-label">Tittle 2</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $abouts->tittle_icon2 }}">
  </div>
  
  <div class="form-group mt-4">
    <label for="text">Isi 2</label>
    <textarea class="form-control" id="text" name="text" rows="3">{{ $abouts->isi_icon2 }}</textarea>
  </div>
  
  <div class="form-group mt-4">
    <label for="text" class="form-label d-block">Icon 3</label>
    <label for="formFile" class="form-label mb-3"><img src="/img/{{ $abouts->icon3 }}" alt="" style="width: 50px"></label>
    <input class="form-control" type="file" id="formFile">
  </div>
  
  <div class="form-group mt-4">
    <label for="exampleFormControlInput1" class="form-label">Tittle 3</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $abouts->tittle_icon3 }}">
  </div>
  
  <div class="form-group mt-4">
    <label for="text">Isi 3</label>
    <textarea class="form-control" id="text" name="text" rows="3">{{ $abouts->isi_icon3 }}</textarea>
  </div>
  
    </form>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
          <!-- /.row -->
          
         
        </div><!-- /.container-fluid -->
      </section>
</div>
    
@endsection