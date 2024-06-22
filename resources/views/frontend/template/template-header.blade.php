<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/stylemisi_visi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/strukturorganisasi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styleaparatur.css') }}">
  <link rel="stylesheet" href="{{ asset('css/layanan.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <title>@yield('Title','isi')</title>
</head>

<body>
  @yield('contents')
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <!-- Logo di kiri -->
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/LogoBondowoso.png') }}" height="28" name="logo">
        <img src="{{ asset('img/Group 7.png') }}" height="28" name="logo-badean">
      </a>

      <!-- Toggler untuk mobile view -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Link di kanan navbar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto"> <!-- Tambahkan kelas ml-auto di sini -->
          <li class="nav-item">
            <a id="home" class="nav-link active" aria-current="page" href="{{route ('halamanutama')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
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
            <a id="loginBtn" class="nav-link" href="{{ route('form') }}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  @include('frontend.template.template-footer')
</body>

</html>
