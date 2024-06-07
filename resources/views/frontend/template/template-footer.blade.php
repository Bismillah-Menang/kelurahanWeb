

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
