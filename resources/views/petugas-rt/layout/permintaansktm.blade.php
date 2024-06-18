@extends('petugas-rt.template.template-header')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card sktmrt">
        <div class="text-nowrap table-responsive pt-0">
            <form action="{{ route('sktmrt') }}" method="GET" id="rtForm">
                @csrf
                <div class="form-group">
                    <label for="pilih_rt">Pilih RT:</label>
                    <select class="form-control" id="pilih_rt" name="pilih_rt" onchange="submitForm()">
                        <option value="RT01" @if($selectedRT=='RT01' ) selected @endif>RT 01</option>
                        <option value="RT02" @if($selectedRT=='RT02' ) selected @endif>RT 02</option>
                        <!-- Tambahkan opsi untuk RT lain sesuai kebutuhan -->
                    </select>


                </div>
            </form>

            <!-- Tabel untuk menampilkan data pengajuan -->
            <table id="pengajuan" class="datatables-basic table border-top">
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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($data)
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->pemohon->nama_pemohon }}</td>
                        <td>{{ $item->pemohon->nik }}</td>
                        <td>{{ $item->keperluan }}</td>
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
                        <td>{{ $item->tanggal_pengajuan }}</td>
                        <td>{{ $item->waktu_pengajuan }}</td>
                        <td>
                            <p data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="status dropdown-toggle">{{ $item->status }}</p>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#status{{ $item->id }}">Ubah Status</a></li>
                            </ul>
                        </td>
                    </tr>
                         <!-- Modal untuk memperbesar gambar -->
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

                    <!-- Modal untuk memperbarui status -->
                    <div class="modal fade" id="status{{ $item->id }}" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalToggleLabel">Ubah Status</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('updatestatus', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <label for="select-status-{{ $item->id }}" class="form-label">Verifikasi</label>
                                        <select id="select-status-{{ $item->id }}" name="pilihstatus" class="form-select">
                                            <option value="Verifikasi Diterima">Verifikasi Diterima</option>
                                            <option value="Verifikasi Ditolak">Verifikasi Ditolak</option>
                                        </select>
                                        <label for="inputketerangan-{{ $item->id }}" class="form-label mt-2" id="keterangan-{{ $item->id }}">Keterangan</label>
                                        <input type="text" class="form-control" name="inputketerangan" id="inputketerangan-{{ $item->id }}" placeholder="Keterangan Ditolak" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Ubah Status</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function submitForm() {
        document.getElementById("rtForm").submit();
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('[id^="status"]').forEach(function(modal) {
                    var id = modal.id.replace('status', '');

                    var selectElement = document.getElementById('select-status-' + id);
                    var inputKeterangan = document.getElementById('inputketerangan-' + id);
                    var labelKeterangan = document.getElementById('keterangan-' + id);

                    function checkValue() {
                        if (selectElement.value === 'Verifikasi Ditolak') {
                            inputK
                            // Initial check
                            checkValue();

                            // Add event listener
                            selectElement.addEventListener('change', checkValue);
                        });
                });
</script>

<script>
    @if(Session::has('berhasil update'))
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Berhasil Di Verifikasi",
        showConfirmButton: false,
        timer: 1500
    });
    @elseif(Session::has('failed update'))
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Gagal Di Verifikasi!",
    });
    @endif
</script>
@endsection
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