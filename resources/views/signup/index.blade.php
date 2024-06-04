<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monaas Register</title>
    <link rel="icon" href="/img/logoMonaas.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
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
                        <img src="/img/{{ $logsigns->image }}" alt="" class="img-fluid img-hero mb-3">
                    @else
                        <img src="/img/default-image.jpg" alt="Default Image" class="img-fluid img-hero mb-3">
                    @endif
                </div>
                <p class="text-white text">{{ $logsigns->text ?? 'Default text' }}</p>
            </div>
            <div class="col-md-6">
                <div class="header-text">
                    <h1>Register</h1>
                    {{-- <p class="ms-3 mt-4">Please enter your details</p> --}}
                </div>
                <form action="{{ route('signup.store') }}" method="POST" class="needs-validation" autocomplete="off" novalidate>
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="username" id="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="telepon" name="no_telp" placeholder="Nomor Telepon" required>
                    </div>
                    {{-- <div class="signup">
                        <small>Don't have an account yet? <a href="" class="text-decoration-none">Sign Up</a></small>
                    </div> --}}
                    <div class="input-group mb-3">
                        <button class="btn btn-lg w-100 rounded rounded-5" style="background-color: #D9005B; color: #FFF; font-family: Poppins; font-size: 16px; font-weight: 600;">Daftar</button>
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
                    <input name="status_aktif" value="Aktif" type="hidden">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userName = document.getElementById('username');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const telepon = document.getElementById('telepon');

            function validateUsername() {
                return userName.value.length >= 8;
            }

            function validateEmail() {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailPattern.test(email.value);
            }

            function validatePassword() {
                return password.value.length >= 8;
            }

            function validateTelepon() {
                const teleponPattern = /^[0-9]{10,14}$/;
                return teleponPattern.test(telepon.value);
            }

            // Watch function to check if input is correct
            function watchInput(inputElement, validateFunction) {
                inputElement.addEventListener('input', function() {
                    if (validateFunction()) {
                        inputElement.classList.remove('is-invalid');
                        inputElement.classList.add('is-valid');
                    } else {
                        inputElement.classList.remove('is-valid');
                        inputElement.classList.add('is-invalid');
                    }
                });
            }

            watchInput(userName, validateUsername);
            watchInput(email, validateEmail);
            watchInput(password, validatePassword);
            watchInput(telepon, validateTelepon);

            document.querySelector('form').addEventListener('submit', function(event) {
                if (!validateUsername() || !validateEmail() || !validatePassword() || !validateTelepon()) {
                    event.preventDefault();
                    alert('Please correct the errors in the form.');
                }
            });
        });
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
