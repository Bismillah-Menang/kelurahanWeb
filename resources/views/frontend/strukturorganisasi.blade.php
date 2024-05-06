<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylemisi_visi.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <!-- Logo di kiri -->
        <a class="navbar-brand" href="#">
        <img src="{{ asset('img/LogoBondowoso.png') }}" height="28" name="logo">
          <img src="{{ asset('img/Group 7.png') }}" height="28" name="logo-badean">
        </a>
        
        <!-- Toggler untuk mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Link di kanan navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto ml-auto"> <!-- Tambahkan kelas ml-auto di sini -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Profil
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi dan Misi</a></li>
          <li><a class="dropdown-item" href="{{ route('aparatur') }}">Aparatur</a></li>
          <li><a class="dropdown-item" href="{{ route('strukturorganisasi') }}">Struktur Organisasi</a></li>
          <li><a class="dropdown-item" href="#">Layanan Kami</a></li>
        </ul>
      </li>
            <li class="nav-item">
              <a class="nav-link" href="#layanan">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#berita">Hubungi Kami</a>
            </li>
              <li class="nav-item">
    <a id="loginBtn" class="nav-link" href="{{ route('login') }}">Login</a>
</li>
        </div>
      </div>
    </nav>
    <!---------------------------------------END Navbar-------------------------------------------------->

    <section class="struktur" id=""struktur1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="gambar">
                <img src="{{ asset('img/struktur 1.png') }}" alt="">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="name">

                    </div>
                </div>
            </div>
        </div>
    </section>

<!-------------------------------- -------------------------------------------->
    <section class="end-page" id="end">
    <div class="container-end">
        <div class="row">
            <!-- Kolom kiri untuk alamat dan logo -->
            <div class="col-md-6">
                <div class="alamat">
                    <img src="{{ asset('img/LogoBondowoso.png') }}" alt="Logo">
                    <div>
                        <h2 class="alamat-end">PEMERINTAH KABUPATEN BONDOWOSO</h2>
                        <h3 class="alamat-end1">Kelurahan Badean</h3>
                        <h4 class="alamat-end2">Jl. Khairil Anwar no 02 Badean - Bondowoso.</h4>
                    </div>
                </div>
            </div>
            <!-- Kolom kanan untuk email dan nomor telepon -->
            <div class="col-md-6">
                <div class="kontak">
                    <!-- Konten Email -->
                    <div class="email">
                        <div class="content-box">
                        <img src="{{ asset('img/emailicon.png') }}" alt="Logo">
                        <span>E-MAIL</span>
                        <h7 class="additional-info">kelurahanbadean@gmail.com</h7>
                        </div>
                    </div>
                    <!-- Konten Telepon -->
                    <div class="telepon">
                        <div class="content-box">
                        <img src="{{ asset('img/teleponicon.png') }}" alt="Logo"> 
                        <span>TELEPON</span>
                        <h7 class="additional-info">085236230235</h7>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<footer class="hidden-footer">
    <div class="footer">
        <span class="footer-text">Kelurahan Badean <img src="{{ asset('img/copyicon.png') }}" alt="Logo" style="vertical-align: middle;"> 2024. All rights reserved.</span>
    </div>
</footer>
<script>
    // Select tombol "Selengkapnya"
    var showMoreBtn = document.getElementById('showMoreBtn');

    // Select deskripsi yang akan ditampilkan
    var description = document.getElementById('description');

    // Tambahkan event listener untuk tombol "Selengkapnya"
    showMoreBtn.addEventListener('click', function() {
        // Toggle kelas 'hidden' pada deskripsi
        description.classList.toggle('hidden');

        // Ubah teks tombol sesuai dengan kondisi deskripsi ditampilkan atau tidak
        if (description.classList.contains('hidden')) {
            showMoreBtn.textContent = 'Selengkapnya';
        } else {
            showMoreBtn.textContent = 'Sembunyikan';
        }
    });
</script>

<script>
        // Deteksi pergerakan scroll
        window.addEventListener('scroll', function() {
            // Mendapatkan posisi vertikal saat ini
            var scrollPosition = window.scrollY;

            // Mendapatkan tinggi dari viewport
            var windowHeight = window.innerHeight;

            // Mendapatkan tinggi dari seluruh halaman
            var documentHeight = document.body.offsetHeight;

            // Jika posisi scroll + tinggi viewport lebih besar dari atau sama dengan tinggi halaman
            // maka footer ditampilkan
            if ((scrollPosition + windowHeight) >= documentHeight) {
                document.querySelector('footer').classList.add('show-footer');
            } else {
                document.querySelector('footer').classList.remove('show-footer');
            }
        });
    </script>

</body>
</html>