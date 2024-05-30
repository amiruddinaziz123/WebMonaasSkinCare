<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monaas Register</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container d-flex justify-content-center align=items-center min-vh-100">
      <div class="row border rounded-5 p-3 shadow box">

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left">
          <div class="image">
            <img src="/img/{{ $logsigns->image }}" alt="" class="img-fluid mb-3 w-75 ms-5 img-hero">
          </div>
          <p class="text-white text">{{ $logsigns->text }}</p>
        </div>
        
        <div class="col-md-6">
          <div class="header-text">
            <h1>Register</h1>
            {{-- <p class="ms-3 mt-4">Please enter your details</p> --}}
          </div>
          
          <form action="{{ route('signup.store') }}" method="POST" class="needs-validation" autocomplete="off" novalidate>
          @csrf
          @error('email_user')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
            
            <div class="input-group mb-3">
                <input type="text" name="username_user" id="" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email_user" id="" class="form-control form-control-lg bg-light fs-6" placeholder="Email" required>
          </div>
            <div class="input-group mb-3">
              <input type="password" name="password_user" id="" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
            </div>
            <div class="input-group mb-3">
              <input type="number" class="form-control" id="telepon" name="no_telp_user" placeholder="Nomor Telepon" required>
            </div>
            {{-- <div class="signup">
              <small>Don't have an account yet? <a href="" class="text-decoration-none">Sign Up</a></small>
            </div> --}}
            <div class="input-group mb-3">
              <button class="btn btn-lg w-100 rounded rounded-5" style="background-color: #D9005B; color: #FFF;
              font-family: Poppins; font-size: 16px; font-weight: 600;">Daftar</button>
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
              <div class="text-small">
                <small>Already have an account yet?</small>
              </div>
              <div class="login">
                <small>
                  <a href="/login" class="text-decoration-none" style="color: #D9005B">Login</a>
                </small>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.getElementById("telepon").addEventListener("input", function() {
          if (this.value.length > 15) {
              this.value = this.value.slice(0, 15);
          }
      });
  </script>
    </script>
  </body>
</html>