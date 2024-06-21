<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/registerstyle.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
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
                                Solusi Terbaik untuk Surat-surat Anda!"
                            </p>
                            <img src="{{ asset('img/Group 65.png') }}" class="logo3" alt="">
                            <img src="{{ asset('img/Group 32.png') }}" class="logo4" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right">
                        <div class="login-header">
                            <h2>Register</h2>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}" required>
                            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                            <button type="submit">Daftar</button>
                        </form>
                        <div class="login-link">
                            <span>Sudah Punya Akun? Silakan </span><a href="{{ route('masuk') }}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session::has('berhasil'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ Session::get('berhasil') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @elseif (Session::has('failed'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{ Session::get('failed') }}",
            });
        </script>
    @endif
</body>
</html>
