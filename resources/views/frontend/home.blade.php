<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Badean</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <!-- Logo di kiri -->
        <a class="navbar-brand" href="#">
          <img src="/path-to-your/logo.png" height="28">
        </a>
        
        <!-- Toggler untuk mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Link di kanan navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto ml-auto"> <!-- Tambahkan kelas ml-auto di sini -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aparatur">Aparatur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
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
                <h1 style="color: #fff;">Kelurahan Badean</h1>
                <p>This is the best place for all your needs.</p>
                <a href="#" style="color: #fff; text-decoration: none; background-color: #007bff; padding: 10px 20px; border-radius: 5px;">Get Started</a>
            </div>
        </div>
    </section>

    <section id="about" class="features1">
        <div class="container">
            <h2>Tentang Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-item1">
                        <img src="{{ asset('img/OIP.jpeg') }}" alt="Deskripsi Gambar">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-item1">
                        <h3>Muhammad Fajar Dwi Putra</h3>
                        <p>Kantor Kelurahan Badean melayani masyarakat dalam memenuhi kebutuhan administrasi 
                                kependudukan. Termasuk di antaranya perizinan-perizinan seperti pekerjaan umum, 
                                perizinan umum kelurahan, perizinan pendidikan, kesehatan warga kelurahan Kantor 
                                Kelurahan Badean, perumahan</p>
                        <p id="description" class="hidden">penataan ruang, perhubungan, lingkungan hidup, 
                                pertanahan yang menjadi kewenangan daerah, serta pemberdayaan perempuan dan 
                                perlindungan anak Secara lebih detail, kantor kelurahan atau lurah yang berada di wilayah 
                                Kabupaten Bondowoso ini melayani izin untuk pengurusan surat keterangan 
                                domisili, pengurusan NPWP, Surat Kelakuan Baik, Surat Pindah Keluar, Surat Keterangan Tidak 
                                Mampu Kantor Kelurahan Badean, Surat Keterangan Usaha, Surat Usaha Mikro, dan Surat 
                                Pernyataan Miskin, surat domisili sementara dan lainnya. Segera kunjungi Kantor Kelurahan 
                                Badean ini untuk informasi lainnya terkait administrasi kependudukan, acara rakyat, info 
                                penyuluhan pada daerahnya. Anda juga bisa menghubungi kontak telepon atau 
                                mengunjungi website kelurahan jika tersedia.</p>
                        <button id="showMoreBtn" class="btn btn-primary">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="aparatur" class="features">
        <div class="container">
            <h2>Aparatur</h2>
            <div class="row">
                <div class="col">
                    <div class="feature-item">
                        <img src="https://via.placeholder.com/100" alt="Feature 1">
                        <h3>Feature 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">
                        <img src="https://via.placeholder.com/100" alt="Feature 2">
                        <h3>Feature 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">
                        <img src="https://via.placeholder.com/100" alt="Feature 3">
                        <h3>Feature 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Berita Terbaru Section -->

<section id ="layanan" class="features" style="background-color: #fff;">
    <div class="container">
        <h2>Layanan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="layanan-item">
                    <img src="https://via.placeholder.com/100" alt="Layanan 1">
                    <h3>Surat Menyurat</h3>
                    <p>Layanan ini digunakan untuk.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="layanan-item">
                    <img src="https://via.placeholder.com/100" alt="Layanan 2">
                    <h3>Pengaduan Online</h3>
                    <p>Layanan ini digunakan untuk.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="layanan-item">
                    <img src="https://via.placeholder.com/100" alt="Layanan 3">
                    <h3>Kos Kosan</h3>
                    <p>Layanan ini digunakan untuk.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    

<section id="berita" class="features" style="background-color: #fff;">
    <div class="container">
        <h2>Berita Terbaru</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="berita-container">
                    <div class="berita-image">
                        <img src="https://via.placeholder.com/100" alt="Berita 1">
                    </div>
                    <div class="berita-content">
                        <h3>Berita 1</h3>
                        <p>Deskripsi berita 1.</p>
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
                        <p>Deskripsi berita 2.</p>
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
                        <p>Deskripsi berita 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="hidden-footer">
        <div class="footer">
            <p>&copy; 2024 All rights reserved.</p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
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
