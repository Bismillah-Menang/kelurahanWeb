<!DOCTYPE html>
<html lang="en">
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
        <form class="login-form" action="#" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" id="loginBtn" class="nav-link" href="{{ route('login') }}">Login</button>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
<script>
    // Ambil tombol "Login" berdasarkan id
    var loginBtn = document.getElementById('loginBtn');

    // Tambahkan event listener untuk menangani klik pada tombol "Login"
    loginBtn.addEventListener('click', function(event) {
        // Mencegah perilaku default dari tautan
        event.preventDefault();

        // Ganti URL halaman dengan URL yang diinginkan
        window.location.href = "dashboard"; // Ganti "url_halaman_baru" dengan URL yang sesuai
    });
</script>

</html>
