<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('img/logolengkapbadean.png') }}" style="height: 50px;">
        </div>
        <div class="foto-vertikal">
    <img src="{{ asset('img/OIP.jpeg') }}" style="height: 50px; margin-right: 10px; border-radius: 50%; padding: 10px;" alt="Deskripsi Gambar">
    <div>
    <span style="display: block;">Mfdiputra</span>
    <span style="display: block; color: green;">online</span>
    </div>
</div>
        <ul class="menu" style="padding: 10%;">
            <li><a href="">Dashboard</a></li>
            <li><a href="">Data Pegawai</a></li>
            <li><a href="">Data Masyarakat</a></li>
            <li><a href="">Proses Surat</a></li>
            <li><a href="">Riwayat</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="topbar">
            <div class="profile">
                <div>
            <span style="margin-right: 10px;">John Doe</span>
            <span style="margin-right: 10px; font-size: 4mm; color: green;">Admin</span>
            </div>
                <img src="{{ asset('img/OIP.jpeg')}}" style="height: 50px; margin-right: 10px;">
            </div>
        </div>
        
        @yield('content')
        <div class="container">
        <div class="left gradient-bg">
            <p style="margin-left: 10%; margin-top: 5%; font-size: large; color: white;">SELAMAT DATANG DI KELURAHAN BADEAN</p>
            <div id="currentDateTime" style="margin-left: 10%; color: white;"></div>
        </div>
        <div class="right">
            <div>Div 1</div>
            <div>Div 2</div>
            <div style="margin-top: 2%;">Div 3</div>
            <div style="margin-top: 2%;">Div 4</div>
        </div>
    </div>


<script>
    // Mendapatkan elemen div untuk menampilkan waktu
    var currentDateTimeElement = document.getElementById('currentDateTime');

    // Mendapatkan tanggal hari ini
    var currentDate = new Date();

    // Daftar nama hari dalam bahasa Inggris
    var daysOfWeek = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

    // Mendapatkan hari ini dalam bentuk teks
    var currentDay = daysOfWeek[currentDate.getDay()];

    // Mendapatkan tanggal hari ini
    var currentDateOfMonth = currentDate.getDate();

    // Mendapatkan bulan hari ini
    var currentMonth = currentDate.getMonth() + 1; // Perlu ditambah 1 karena Januari dimulai dari 0
    var monthsOfYear = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    var currentMonthName = monthsOfYear[currentMonth - 1]; // Perlu dikurangi 1 karena array dimulai dari 0

    // Mendapatkan tahun hari ini
    var currentYear = currentDate.getFullYear();

    // Menggabungkan semua informasi menjadi satu string
    var currentDateTimeString = " " + currentDay + ", " + currentDateOfMonth + " " + currentMonthName + " " + currentYear;

    // Menampilkan waktu yang dihasilkan ke dalam elemen div
    currentDateTimeElement.textContent = currentDateTimeString;
</script>

</body>
</html>
