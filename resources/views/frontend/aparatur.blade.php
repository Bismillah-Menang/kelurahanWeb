@extends('frontend.template.template-header')
@section('Title','Aparatur')
@section('content')
<section id="aparatur" class="feature" style="background-color: white">
    <h2 class="tittle">Aparatur Kelurahan Badean</h2>
    <div class="container">
        <div class="more-item mb-2">
            <img src="{{ asset('img/foto3.jpg') }}" alt="Profil">
            <h5>Yashinta Galuh Ditriyanti,S.STP.,M.Si </h5>
            <h6 class="jabatan">Kepala Kantor Kelurahan Badean </h6>
        </div>
        <div class="row">
        <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto4.jpg') }}" alt="Profil">
            <h5>Meitri Koerniawati,AM.d</h5>
            <h6 class="jabatan">Sekertaris Kelurahan Badean</h6>
        </div>
    </div>
    <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto2.jpg') }}" alt="Profil">
            <h5>Agus Prawito,S.Sos.</h5>
            <h6 class="jabatan">Kepala Seksi Sosial</h6>
        </div>
    </div>
    <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto1.jpg') }}" alt="Profil">
            <h5>Lely Martiningsih</h5>
            <h6 class="jabatan">Kepala Seksi Pemberdayaan Masyarakat</h6>
        </div>
    </div>
    <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto5.jpg') }}" alt="Profil">
            <h5>Bobby Oktabiyanto,S.Sos.</h5>
            <h6 class="jabatan">Kepala Seksi Pemerintahan</h6>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

@endsection