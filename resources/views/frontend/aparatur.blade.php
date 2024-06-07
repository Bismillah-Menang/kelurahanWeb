@extends('frontend.template.template-header')
@section('Title','Aparatur')
@section('content')
<section id="aparatur" class="features">
    <div class="container">
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
    </div>
</section>
<!-------------------------------line 2 ------------------------------->
<section id="aparatur" class="features">
    <div class="container">
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
    </div>
</section>

    
@endsection