<!DOCTYPE html>
<html lang="en">
<style>
    .register-forgot-container .register-link,
    .register-forgot-container .forgot-password {
        text-align: center;
        justify-content: center;
    }

    .register-forgot-container .forgot-password a {
        color: #007bff;
        text-decoration: none;
    }

    .register-forgot-container .forgot-password a:hover {
        text-decoration: underline;
    }

    .password-container {
        position: relative;
        display: flex;
        align-items: center;
    }

    .password-container input {
        width: 100%;
        padding-right: 40px;
        /* Adjust to make room for the icon */
    }

    .password-container .toggle-password {
        position: absolute;
        right: 10px;
        cursor: pointer;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <section class="container" id="login-page">
        <div class="container-login">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <a href="javascript:history.back()" class="btn back-btn">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <div class="img">
                            <img src="{{ asset('img/LogoBondowoso.png') }}" class="logo1" alt="">
                            <img src="{{ asset('img/Group 7.png') }}" class="logo2" alt="">
                            <p>“Hemat Waktu, Hidup Lebih Mudah: Aplikasi Kelurahan Badean<br>
                                Solusi Terbaik untuk Surat-surat Anda!"</p>
                            <img src="{{ asset('img/Group 65.png') }}" class="logo3" alt="">
                            <img src="{{ asset('img/Group 32.png') }}" class="logo4" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right">
                        <div class="login-header">
                            <h2>Log In</h2>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="login-form" action="{{ route('masuk') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Username"
                                    required>
                            </div>
                            <div class="password-container mb-3">
                                <input type="password" name="password" id="password" placeholder="Password" required>
                                {{-- <i class="fas fa-eye toggle-password" id="togglePassword"></i> --}}
                            </div>
                            <button type="submit" id="loginBtn" class="nav-link" href="">Login</button>
                        </form>
                        <div class="register-forgot-container d-flex flex-column mt-3">
                            <div class="register-link mb-2">
                                <span>Belum Punya Akun? Silahkan </span><a href="{{ route('register') }}">Daftar</a>
                            </div>
                            <div class="forgot-password">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (Session::has('belum login'))

            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Anda Belum Login BROOO",
            });
        @elseif (Session::has('gagal login'))

            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "GAGAL",
            });
        @elseif (Session::has('berhasil daftar'))
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Berhasil Regrestrasi",
                showConfirmButton: false,
                timer: 1500
            });
        @endif

        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
