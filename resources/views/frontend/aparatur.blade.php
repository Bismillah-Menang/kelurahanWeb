@extends('frontend.template.template-header')
@section('Title','Aparatur')
@section('content')
<section id="aparatur" class="feature" style="background-color: white">
    <h2 class="tittle">Aparatur Kelurahan Badean</h2>
    <div class="container">
        <div class="more-item">
            <img src="{{ asset('img/foto1.jpg') }}" alt="Profil">
            <h5>Mr. John Doe</h5>
            <h6 class="jabatan">Jabatan Anda</h6>
        </div>
        <div class="row">
        <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto2.jpg') }}" alt="Profil">
            <h5>Mrs. Jane Doe</h5>
            <h6 class="jabatan">Jabatan Anda</h6>
        </div>
    </div>
    <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto3.jpg') }}" alt="Profil">
            <h5>Mr. James Smith</h5>
            <h6 class="jabatan">Jabatan Anda</h6>
        </div>
    </div>
    <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto4.jpg') }}" alt="Profil">
            <h5>Mr. James Smith</h5>
            <h6 class="jabatan">Jabatan Anda</h6>
        </div>
    </div>
    <div class="col">
        <div class="more-item">
            <img src="{{ asset('img/foto5.jpg') }}" alt="Profil">
            <h5>Mr. James Smith</h5>
            <h6 class="jabatan">Jabatan Anda</h6>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

@endsection