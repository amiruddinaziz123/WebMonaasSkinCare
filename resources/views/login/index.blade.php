<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monaas Login</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <!-- SweetAlert2 -->
   <link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 shadow box">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left">
                <div class="image">
                  @if($logsigns && $logsigns->image)
                    <img src="/img/{{ $logsigns->image }}" alt="" class="img-fluid mb-3 ms-5" style="width: 300px">
                  @else
                    <img src="/img/default-image.jpg" alt="Default Image" class="img-fluid mb-3 ms-5" style="width: 300px">
                  @endif
                </div>
                <p class="text-white text ms-5">{{ $logsigns->text ?? 'Default text' }}</p>
            </div>
            <div class="col-md-6">
                <div class="header-text">
                    <h1>Login</h1>
                    {{-- <p class="ms-3 mt-4">Please enter your details</p> --}}
                </div>
                <form action="{{ route('login.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    {{-- <div class="signup">
                        <small>Don't have an account yet? <a href="" class="text-decoration-none">Sign Up</a></small>
                    </div> --}}
                    <div class="input-group mb-3">
                        <button class="btn btn-lg w-100 rounded rounded-5" style="background-color: #D9005B; color: #FFF; font-family: Poppins; font-size: 16px; font-weight: 600;">Masuk</button>
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="text-small">
                            <small>Don't have an account yet?</small>
                        </div>
                        <div class="signup">
                            <small>
                                <a href="/register" class="text-decoration-none" style="color: #D9005B">Register</a>
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Regisiter Sukses',
            text: '{{ session('success') }}',
        });
    </script>
    @endif

    <script>
        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: '{{ session('error') }}',
            });
        @endif
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
</body>
</html>
