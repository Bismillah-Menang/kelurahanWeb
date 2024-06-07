    @extends('frontend.template.template-header')
    @section('Title','Home')
    @section('content')
    <section class="hero gradient-bg">
        <div class="container">
            <div>
                <h1 class="font-1">Kelurahan Badean</h1>
               <p>
               Sebagai wujud komitmen dalam memberikan informasi seluas - <br>
luasnya kepada masyarakan Badean dan <br>
mempermudah dalam proses pengajuan surat yang dibutuhkan <br>
oleh masyarakat</p>
<button class="button-1">Download Aplikasi</button>
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
                    <a href="{{ route('sktm') }}" style="text-decoration: none;">
                    <img src="{{ asset('img/Vector1.png') }}" alt="Layanan 1">
                    <h3>Surat Keterangan Tidak Mampu</h3></a>
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

@endsection






