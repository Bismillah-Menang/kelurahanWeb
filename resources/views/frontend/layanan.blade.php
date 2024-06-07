@extends('frontend.template.template-header')
@section('Title','Layanan')
@section('content')
 <!-- Layanan Section -->
 <section id="layanan" class="features">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid">
            
            <div class="grid-item">
            <a href="{{ route('sktm') }}">
                <img src="{{ asset('img/Vector1.png') }}" alt="Icon 1" class="mb-2">
                <span class="text-sm text-zinc-800"><br>Surat Keterangan Tidak Mampu</span>
            </a>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector2.png') }}" alt="Icon 2" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Izin Usaha</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector3.png') }}" alt="Icon 3" class="mb-2">
                <span class="text-sm text-zinc-800">Akta Kelahiran</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector4.png') }}" alt="Icon 4" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Berkelakuan Baik</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector5.png') }}" alt="Icon 5" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Harga Tanah</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector6.png') }}" alt="Icon 6" class="mb-2">
                <span class="text-sm text-zinc-800">Akta Kematian</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector7.png') }}" alt="Icon 7" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Cerai</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector8.png') }}" alt="Icon 8" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Perpindahan Domisili</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector9.png') }}" alt="Icon 9" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Domisili</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector10.png') }}" alt="Icon 10" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Belum Menikah</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector11.png') }}" alt="Icon 11" class="mb-2">
                <span class="text-sm text-zinc-800">Surat Satu Nama</span>
            </div>
            
            <div class="grid-item">
                <img src="{{ asset('img/Vector12.png') }}" alt="Icon 12" class="mb-2">
                <span class="text-sm text-zinc-800">SKCK</span>
            </div>

        </div>
    </div>
</section>
    
@endsection