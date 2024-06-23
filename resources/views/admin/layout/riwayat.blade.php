@extends('admin.template.template-header')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card sktmadmin">

        <div class="text-nowrap table-responsive pt-0">
            <table id="riwayat" class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th>Nama Pemohon</th>
                        <th>NIK</th>
                        <th>Keperluan</th>
                        <th>Foto KK</th>
                        <th>Foto KTP</th>
                        <th>Foto Bukti Pengantar</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>PDF</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item -> pemohon -> nama_pemohon}}</td>
                        <td>{{$item -> pemohon -> nik}}</td>
                        <td>{{$item -> keperluan}}</td>
                        <td class="text-center align-middle">
                            <a href="/storage/{{ $item->foto_kk }}" class="show-image" data-image="/storage/{{ $item->foto_kk }}">
                                <img src="/storage/{{ $item->foto_kk }}" alt="Foto KK" class="img-thumbnail" style="max-width: 50px;">
                            </a>
                        </td>
                        <td class="text-center align-middle">
                            <a href="/storage/{{ $item->foto_ktp }}" class="show-image" data-image="/storage/{{ $item->foto_ktp }}">
                                <img src="/storage/{{ $item->foto_ktp }}" alt="Foto KTP" class="img-thumbnail" style="max-width: 50px;">
                            </a>
                        </td>
                        <td class="text-center align-middle">
                            <a href="/storage/{{ $item->bukti_pengantar }}" class="show-image" data-image="/storage/{{ $item->bukti_pengantar }}">
                                <img src="/storage/{{ $item->bukti_pengantar }}" alt="Foto Bukti Pengantar" class="img-thumbnail" style="max-width: 50px;">
                            </a>
                        </td>
                        <td>{{$item -> tanggal_pengajuan}}</td>
                        <td>{{$item -> waktu_pengajuan}}</td>
                        <td>
                            @if($item->pdf_surat)
                            <a href="/storage/{{ $item->pdf_surat }}" target="_blank" class="btn btn-primary">Download PDF</a>
                            @else
                            Tidak Tersedia
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('delete.riwayat', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="exLargeModal" tabindex="-1" aria-labelledby="exLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exLargeModalLabel">Gambar Berkas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Gambar" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<script>
    let table = new DataTable('#riwayat');
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageLinks = document.querySelectorAll('.show-image');
        const modalImage = document.getElementById('modalImage');

        imageLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const imageUrl = this.getAttribute('data-image');
                modalImage.setAttribute('src', imageUrl);
                const modal = new bootstrap.Modal(document.getElementById('exLargeModal'));
                modal.show();
            });
        });
    });
</script>
@endsection