@extends('user.template.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card pemohon">
        <a><button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#pengajuan">Pengajuan Surat</button></a>

        <div class="text-nowrap table-responsive pt-0">
            <table id="pemohon" class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th>Tanggal Pengajuan</th>
                        <th>Waktu Pengajuan</th>
                        <th>Foto KK</th>
                        <th>Foto KTP</th>
                        <th>Bukti Pengantar</th>
                        <th>Status Pengajuan</th>
                        <th>PDF Surat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Kirim as $item)
                    <tr>
                        <td>{{ $item->tanggal_pengajuan }}</td>
                        <td>{{ $item->waktu_pengajuan }}</td>
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

                        <td>{{ $item->status }}</td>
                        <td>
                            @if ($item->pdf_surat)
                            <a href="/storage/{{ $item->pdf_surat }}" target="_blank">Lihat PDF</a>
                            @else
                            Belum Di Konfirmasi
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="pengajuan" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalToggleLabel">Pengajuan Surat Keterangan Tidak Mampu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('user.pengajuansktm') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">

                        <label for="defaultFormControlInput" class="form-label">NIK</label>
                        <div class="input-group">
                            <input type="text" class="form-control " id="nik" disabled placeholder="NIK Pemohon" aria-describedby="defaultFormControlHelp" name="nik" />
                            <button type="button" class="btn btn-warning" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Cari Pemohon</button>
                        </div>
                        <label for="defaultFormControlInput" class="form-label">Nama Pemohon</label>
                        <input type="text" class="form-control mb-1" id="nama_pemohon" disabled placeholder="Masukkan Nama Pemohon" aria-describedby="defaultFormControlHelp" name="nama_pemohon" />

                        <input type="hidden" class="form-control mb-1" id="id_pemohons" placeholder="Masukkan Nama Pemohon" aria-describedby="defaultFormControlHelp" name="id_pemohon" />
                        <label for="defaultFormControlInput" class="form-label">Alamat</label>
                        <input type="text" class="form-control mb-1" id="alamat" disabled placeholder="Alamat Pemohon" aria-describedby="defaultFormControlHelp" name="alamat" />
                        <input type="hidden" name="id_rt" id="id_rt_hidden">
                        <div class="mb-2">
                            <label for="defaultSele" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control mb-2" name="tempat_lahir" id="jenis_kelamin" disabled placeholder="Masukkan Jenis Kelamin" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <label for="defaultFormControlInput" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control mb-2" name="tempat_lahir" id="tempat_lahir" disabled placeholder="Masukkan Tempat Lahir" aria-describedby="defaultFormControlHelp" />

                        <label for="defaultFormControlInput" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control mb-2" name="tanggal_lahir" id="tanggal_lahir" disabled placeholder="Masukkan Tanggal Lahir" aria-describedby="defaultFormControlHelp" />

                        <label for="agama" class="form-label">Agama</label>
                        <select id="agama" class="form-select" name="agama" disabled>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kongshuchu">Konghuchu</option>
                        </select>
                        <label for="defaultFormControlInput" class="form-label mb-2">Pekerjaan</label>
                        <input type="text" class="form-control mb-2" name="pekerjaan" id="pekerjaan" disabled placeholder="Masukkan Pekerjaan" aria-describedby="defaultFormControlHelp" name="pekerjaan" />

                        <label for="defaultFormControlInput" class="form-label">RT</label>
                        <input type="text" class="form-control mb-2" name="rt" id="rt" placeholder="Masukkan RT" aria-describedby="defaultFormControlHelp" />


                        <label for="defaultFormControlInput" class="form-label mb-2">Nama Orang Tua Pemohon</label>
                        <input type="text" class="form-control mb-2" id="defaultFormControlInput" placeholder="Masukkan Nama Pemohon" aria-describedby="defaultFormControlHelp" name="nama_ortu" />
                        <div class="mb-2">
                            <label for="defaultSelect" class="form-label">Jenis Kelamin</label>
                            <select id="defaultSelect" class="form-select" name="jenis_kelamin">
                                <option>Jenis Kelamin</option>
                                <option value="1">Laki - laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <label for="defaultFormControlInput" class="form-label mb-2">Pekerjaan</label>
                        <input type="text" class="form-control mb-2" name="pekerjaan" id="pekerjaan" placeholder="Masukkan Pekerjaan Orang Tua" aria-describedby="defaultFormControlHelp" />
                        <label for="defaultFormControlInput" class="form-label">Alamat</label>
                        <input type="text" class="form-control mb-1" id="alamat" placeholder="Alamat Orang Tua Pemohon" aria-describedby="defaultFormControlHelp" name="alamat" required />
                        <div class="mb-2">
                            <label for="formFile" class="form-label">Upload Foto KTP</label>
                            <input class="form-control" type="file" id="formFile" name="foto_ktp">
                        </div>
                        <div class="mb-2">
                            <label for="formFile" class="form-label">Upload Foto KK</label>
                            <input class="form-control" type="file" id="formFile" name="foto_kk">
                        </div>
                        <div class="mb-2">
                            <label for="formFile" class="form-label">Upload Foto Bukti Pengantar</label>
                            <input class="form-control" type="file" id="formFile" name="bukti_pengantar">
                        </div>
                        <label for="defaultFormControlInput" class="form-label">Keperluan</label>
                        <input type="text" class="form-control mb-1" id="keperluan" placeholder="Masukkan Keperluan" aria-describedby="defaultFormControlHelp" name="keperluan" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajukan Surat</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalToggle2" aria-hidden="true" aria-labelledby="modalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalToggleLabel2">Daftar Pemohon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-nowrap table-responsive pt-0">
                    <table id="pemohon" class="datatables-basic table border-top">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama Pemohon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forEach($Send as $item)
                            <tr>
                                <td>{{ $item->nik}}</td>
                                <td>{{ $item->nama_pemohon }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="ambildata('{{ $item->nik }}', '{{ $item->nama_pemohon }}', '{{ $item->alamat }}','{{ $item->jenis_kelamin }}','{{ $item->tempat_lahir }}',
                                    '{{ $item->tanggal_lahir }}','{{ $item->agama }}','{{ $item->pekerjaan }}', '{{ $item->id }}','{{ $item->rt }}')" data-bs-target="#pengajuan" data-bs-toggle="modal" data-bs-dismiss="modal">Pilih Pemohon</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Gambar Berkas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Gambar" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <!-- Modal untuk PDF Preview -->
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">PDF Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed id="pdfEmbed" src="" type="application/pdf" width="100%" height="600px">
            </div>
        </div>
    </div>
</div>
<script>
    function ambildata(nik, nama_pemohon, alamat, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pekerjaan, id_pemohon, rt) {
        document.getElementById('nik').value = nik;
        document.getElementById('nama_pemohon').value = nama_pemohon;
        document.getElementById('alamat').value = alamat;
        document.getElementById('jenis_kelamin').value = jenis_kelamin;
        document.getElementById('tempat_lahir').value = tempat_lahir;
        document.getElementById('tanggal_lahir').value = tanggal_lahir;
        document.getElementById('agama').value = agama;
        document.getElementById('pekerjaan').value = pekerjaan;
        document.getElementById('id_pemohons').value = id_pemohon;
        document.getElementById('rt').value = rt;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const imageLinks = document.querySelectorAll('.show-image');
        const modalImage = document.getElementById('modalImage');
        const pdfEmbed = document.getElementById('pdfEmbed');


        imageLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const imageUrl = this.getAttribute('data-image');
                modalImage.setAttribute('src', imageUrl);
                const modal = new bootstrap.Modal(document.getElementById('exLargeModal'));
                modal.show();
            });
        });
        pdfLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const pdfLink = this.getAttribute('href');
                pdfEmbed.setAttribute('src', pdfLink);
                const modal = new bootstrap.Modal(document.getElementById('pdfModal'));
                modal.show();
            });
        });
    });
</script>

@endsection