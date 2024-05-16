<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Badean</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
          <li><a class="dropdown-item" href="{{ route('layanan') }}">Layanan Kami</a></li>
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

    <!-- Hero Section -->
    <section class="hero gradient-bg">
        <div class="container">
            <div>
                <h1 class="font-1">Kelurahan Badean</h1>
               <p>
               Sebagai wujud komitmen dalam memberikan informasi seluas - <br>
luasnya kepada masyarakan Badean akan <br>
mempermudah dalam proses pengajuan surat yang dilakukan <br>
oleh masyarakat</p>
<button class="button-1">Mulai Pengajuan</button>
<button class="button-2">Hubungi Admin</button>
<img src="{{ asset('img/people 1.png') }}"  name="gambar-people">
            </div> 
        </div>
    </section>

    <section id="about" class="features1">
        <div class="container">
            <h2>Tentang E - Badean</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-item1">
                        <img src="{{ asset('img/Group 32.png') }}" alt="Deskripsi Gambar" name="img-web">
                        <img src="{{ asset('img/Group 31.png') }}" alt="Deskripsi Gambar" name="img-mobile">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-item1">
                        <p>E-Badean adalah sebuah platform yang tersedia dalam bentuk situs web <br>
dan aplikasi mobile. Didesain untuk digunakan oleh masyarakat umum, <br>
ketua RT, dan RW. Selain itu, terdapat situs web khusus yang diperuntukkan<br> 
bagi admin kelurahan, yang bertujuan untuk mengelola data master dari <br>
masyarakat. Tujuan utamanya adalah memungkinkan masyarakat untuk<br>
mengajukan surat secara online, memberikan kemudahan dalam hal <br>
efisiensi dan efektivitas tanpa terbatas oleh waktu dan lokasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="aparatur" class="features">
        <div class="container">
            <h2>Aparatur Kelurahan Badean</h2>
            <div class="feature-item">
                        <img src="{{ asset('img/profile1.png') }}" alt="Feature 1" name="feature-1">
                        <h3>Mr.Cillian Murphy</h3>
                        <p class="jabatan-1">Kepala Lurah Badean</p>
                    </div>
            <div class="row">
                <div class="col">
                    <div class="feature-item">
                        <img src="{{ asset('img/profile2.png') }}" alt="Feature 2" name="feature-2">
                        <h3>Mr.Chris Hemsworth</h3>
                        <p class="jabatan-2">Seketaris</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">
                        <img src="{{ asset('img/profile3.png') }}" alt="Feature 3" name="feature-3">
                        <h3>Mrs.Siti Jubaedah</h3>
                        <p class="jabatan-3">Bendahara</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">
                        <img src="{{ asset('img/profille4.png') }}" alt="Feature 4" name="feature-4">
                        <h3>Ms.Lalisa Manoban</h3>
                        <p class="jabatan-4">Staff Pelayanan Umum</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">  
                        <img src="{{ asset('img/Profile5.png') }}" alt="Feature 5" name="feature-5">
                        <h3>Mr. Timothee Chalemet</h3>
                        <p class="jabatan-5">Kasi Pemerintahan</p>
                    </div>
                </div>
            </div> <button class="button-3" onclick="window.location='{{ route('aparatur') }}'">Selengkapnya</button>
        </div>
    </section>
<!-- Layanan Section -->

<section id ="layanan" class="features" style="background-color: #fff;">
    <div class="container">
        <h4>Layanan Kami</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector1.png') }}" alt="Layanan 1">
                    <h3>Surat Keterangan Tidak Mampu</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector2.png') }}" alt="Layanan 2">
                    <h3>Surat Izin Usaha</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector3.png') }}" alt="Layanan 3">
                    <h3>Akta Kelahiran</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector4.png') }}" alt="Layanan 4">
                    <h3>Surat Berkelakuan Baik</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector5.png') }}" alt="Layanan 5">
                    <h3>Surat Harga Tanah</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector6.png') }}" alt="Layanan 6">
                    <h3>Akta Kematian</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector7.png') }}" alt="Layanan 7">
                    <h3>Surat Cerai</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layanan-item">
                    <img src="{{ asset('img/Vector8.png') }}" alt="Layanan 8">
                    <h3>Surat Pindah Domisili</h3>
                </div>
            </div>
        </div>
    </div><button class="button-4" onclick="window.location='{{ route('layanan') }}'">Selengkapnya</button>
</section>

<!-- Berita Terbaru Section -->
<section id="berita" class="features" style="background-color: #fff;">
    <div class="container">
        <h5>Berita & Pengumuman</h5>
        <div class="row">
            <div class="col-md-4">
                <div class="berita-container">
                    <div class="berita-image">
                        <img src="https://via.placeholder.com/100" alt="Berita 1">
                    </div>
                    <div class="berita-content">
                        <h3>Berita 1</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="berita-container">
                    <div class="berita-image">
                        <img src="https://via.placeholder.com/100" alt="Berita 2">
                    </div>
                    <div class="berita-content">
                        <h3>Berita 2</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="berita-container">
                    <div class="berita-image">
                        <img src="https://via.placeholder.com/100" alt="Berita 3">
                    </div>
                    <div class="berita-content">
                        <h3>Berita 3</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------End Page---------------------------------->
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
 <script>
        // Select semua tautan navbar
        var navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Loop melalui setiap tautan navbar
        navbarLinks.forEach(function(navbarLink) {
            // Tambahkan event listener untuk setiap tautan navbar
            navbarLink.addEventListener('click', function(event) {
                // Mencegah perilaku default dari tautan
                event.preventDefault();

                // Ambil href dari tautan
                var targetSectionId = this.getAttribute('href');

                // Ambil elemen dari target section
                var targetSection = document.querySelector(targetSectionId);

                // Lakukan pergerakan scroll ke target section
                targetSection.scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
    <script>
    // Ambil tombol "Login" berdasarkan id
    var loginBtn = document.getElementById('loginBtn');

    // Tambahkan event listener untuk menangani klik pada tombol "Login"
    loginBtn.addEventListener('click', function(event) {
        // Mencegah perilaku default dari tautan
        event.preventDefault();

        // Ganti URL halaman dengan URL yang diinginkan
        window.location.href = "login"; // Ganti "url_halaman_baru" dengan URL yang sesuai
    });
</script>


</body>
</html>
