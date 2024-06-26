@extends('frontend.template.template-header')
@section('Title','Visi Misi')
@section('content')
<h1>Visi dan Misi</h1>
    <section class="visimisi-page" id="visimisi">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img">
                    <img src="{{ asset('img/visimisi1.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <div class="content-boxs">
                        <div class="visi">
                        <h2>Visi</h2>
                        <img src="{{ asset('img/visi.png') }}" alt="Logo">
                        <h4>Kelurahan Semarapura Tengah yang Unggul dan Sejahtera melalui Pelayana Prima dan Pemberdayaan Masyarakat.</h4>
                        </div>
                        <div class="misi">
                            <h2>Misi</h2>
                        <img src="{{ asset('img/visi.png') }}" alt="Logo">
                        <h4>Meningkatkan kualitas penyelenggaraan pemerintahan, pembangunan dan pelayanan publik di Kelurahan</h4>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    </section>
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
    
@endsection