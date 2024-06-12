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
            <a><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahpemohon">Tambah
                    Data Pemohon</button></a>
            <div class="text-nowrap table-responsive pt-0">
                <table id="pemohon" class="datatables-basic table border-top">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama Pemohon</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Pekerjaan</th>
                            <th>RT</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemohon as $item)
                            <tr>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nama_pemohon }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->pekerjaan }}</td>
                                <td>{{ $item->rt }}</td>
                                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editpemohon{{ $item->id }}">Edit</button>
                                    <form action="{{ route('user_pemohon.hapus', $item->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                            </tr>
                            <div class="modal fade" id="editpemohon{{ $item->id }}" aria-labelledby="modalToggleLabel"
                                tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalToggleLabel">Edit Pemohon</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="/user/pemohon/edit/{{ $item->id }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <label for="nik{{ $item->id }}" class="form-label">NIK</label>
                                                <input type="text" class="form-control mb-2" value="{{ $item->nik }}"
                                                    name="nik" id="nik{{ $item->id }}" placeholder="Masukkan NIK"
                                                    aria-describedby="defaultFormControlHelp" />

                                                <label for="nama_pemohon{{ $item->id }}" class="form-label">Nama
                                                    Pemohon</label>
                                                <input type="text" class="form-control mb-2"
                                                    value="{{ $item->nama_pemohon }}" name="nama_pemohon"
                                                    id="nama_pemohon{{ $item->id }}"
                                                    placeholder="Masukkan Nama Pemohon"
                                                    aria-describedby="defaultFormControlHelp" />

                                                <label for="alamat{{ $item->id }}" class="form-label">Alamat</label>
                                                <input type="text" class="form-control mb-2" value="{{ $item->alamat }}"
                                                    name="alamat" id="alamat{{ $item->id }}"
                                                    placeholder="Masukkan Alamat"
                                                    aria-describedby="defaultFormControlHelp" />

                                                <label for="jenis_kelamin{{ $item->id }}" class="form-label">Jenis
                                                    Kelamin</label>
                                                <select id="jenis_kelamin{{ $item->id }}" class="form-select"
                                                    name="jenis_kelamin">
                                                    <option value="Perempuan"
                                                        {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                                        Perempuan</option>
                                                    <option value="Laki-Laki"
                                                        {{ $item->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                                        Laki-Laki</option>
                                                </select>

                                                <label for="tempat_lahir{{ $item->id }}" class="form-label">Tempat
                                                    Lahir</label>
                                                <input type="text" class="form-control mb-2"
                                                    value="{{ $item->tempat_lahir }}" name="tempat_lahir"
                                                    id="tempat_lahir{{ $item->id }}"
                                                    placeholder="Masukkan Tempat Lahir"
                                                    aria-describedby="defaultFormControlHelp" />

                                                <label for="tanggal_lahir{{ $item->id }}" class="form-label">Tanggal
                                                    Lahir</label>
                                                <input type="date" class="form-control mb-2"
                                                    value="{{ $item->tanggal_lahir }}" name="tanggal_lahir"
                                                    id="tanggal_lahir{{ $item->id }}"
                                                    placeholder="Masukkan Tanggal Lahir"
                                                    aria-describedby="defaultFormControlHelp" />

                                                <label for="agama{{ $item->id }}" class="form-label">Agama</label>
                                                <select id="agama{{ $item->id }}" class="form-select" name="agama">
                                                    <option value="Islam"
                                                        {{ $item->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="Kristen"
                                                        {{ $item->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                                    <option value="Katolik"
                                                        {{ $item->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                                    <option value="Hindu"
                                                        {{ $item->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="Buddha"
                                                        {{ $item->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                                    <option value="Konghuchu"
                                                        {{ $item->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu
                                                    </option>
                                                </select>

                                                <label for="pekerjaan{{ $item->id }}"
                                                    class="form-label">Pekerjaan</label>
                                                <input type="text" class="form-control mb-2"
                                                    value="{{ $item->pekerjaan }}" name="pekerjaan"
                                                    id="pekerjaan{{ $item->id }}" placeholder="Masukkan Pekerjaan"
                                                    aria-describedby="defaultFormControlHelp" />

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"
                                                    data-bs-target="#modalToggle2" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal">Edit Pemohon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="aiman" aria-labelledby="modalToggleLabel" tabindex="-1"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalToggleLabel">Tambah Pemohon</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/user/pemohon/tambah" method="POST">
                            @csrf

                            <div class="modal-body">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control mb-2" name="nik" id="nik"
                                    placeholder="Masukkan NIK" aria-describedby="defaultFormControlHelp" />

                                <label for="defaultFormControlInput" class="form-label">Nama Pemohon</label>
                                <input type="text" class="form-control mb-2" name="nama_pemohon" id="nama_pemohon"
                                    placeholder="Masukkan Nama Pemohon" aria-describedby="defaultFormControlHelp" />

                                <label for="defaultFormControlInput" class="form-label">Alamat</label>
                                <input type="text" class="form-control mb-2" name="alamat" id="alamat"
                                    placeholder="Masukkan Alamat" aria-describedby="defaultFormControlHelp" />

                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                </select>

                                <label for="pilih_rt" class="form-label">RT</label>
                                <select id="pilih_rt" class="form-select" name="pilih_rt">
                                    <?php
                                    $rt_options = array_map(function ($i) {
                                        return 'rt ' . str_pad($i, 2, '0', STR_PAD_LEFT);
                                    }, range(1, 36));
                                    
                                    foreach ($rt_options as $option) {
                                        echo "<option value='$option'>$option</option>";
                                    }
                                    ?>
                                </select>

                                <label for="defaultFormControlInput" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control mb-2" name="tempat_lahir" id="tempat_lahir"
                                    placeholder="Masukkan Tempat Lahir" aria-describedby="defaultFormControlHelp" />

                                <label for="defaultFormControlInput" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control mb-2" name="tanggal_lahir" id="tanggal_lahir"
                                    placeholder="Masukkan Tanggal Lahir" aria-describedby="defaultFormControlHelp" />

                                <label for="agama" class="form-label">Agama</label>
                                <select id="agama" class="form-select" name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Kongshuchu">Konghuchu</option>
                                </select>
                                <label for="defaultFormControlInput" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control mb-2" name="pekerjaan" id="pekerjaan"
                                    placeholder="Masukkan Pekerjaan" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">Tambah Pemohon</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tambahpemohon" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalToggleLabel">Tambah Pemohon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control mb-2" name="nik" id="nika"
                        placeholder="Masukkan NIK" aria-describedby="defaultFormControlHelp" />
                    <button class="btn btn-primary btn-nik " id="cariButton" onclick="cariNIK()">Cari NIK</button>
                    <button class="btn btn-primary" data-bs-target="#aiman" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Tambah Pemohon Baru</button>
                    <div class="text-nowrap table-responsive pt-0">
                        <table style="display: none;" id="data-table" class="datatables-basic table border-top">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Pemohon</th>
                                    <th>Alamat</th>
                                    <th>RT</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($semuapemohon as $item)
                                    <tr>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->nama_pemohon }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->rt }}</td>
                                        <form action="/user/claimpemohon/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <td><button type="submit" class="btn btn-warning">Klaim Pemohon</button></td>
                                        </form>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const nikInput = document.getElementById('nika');
            const cariButton = document.getElementById('cariButton');

            // Initial button state is disabled


            function cekNIK() {
                const nikValue = nikInput.value;
                // Only allow numeric input
                const cleanedValue = nikValue.replace(/\D/g, '');
                // Update the input value to cleanedValue to ensure only digits are present
                nikInput.value = cleanedValue;
                // Check if the cleanedValue is exactly 16 digits long
                const isValidNik = nikInput.value.trim().length === 16;
                if (isValidNik) {
                    cariButton.disabled = false;

                } else {
                    cariButton.disabled = true;

                }

            };
            nikInput.addEventListener('input', cekNIK);
            cekNIK();
        });
        let table = new DataTable('#pemohon')

        function cariNIK() {
            var input = document.getElementById('nika').value;
            var table = document.getElementById('data-table');
            var rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            var found = false;

            // Menampilkan tabel
            table.style.display = 'table';

            // Menghapus highlight sebelumnya
            for (var i = 0; i < rows.length; i++) {
                rows[i].style.display = 'none';
            }

            // Mencari NIK di tabel
            for (var i = 0; i < rows.length; i++) {
                var nik = rows[i].getElementsByTagName('td')[0].innerText;
                if (nik === input) {
                    rows[i].style.display = '';
                    rows[i].classList.add('highlight');
                    found = true;
                } else {
                    rows[i].classList.remove('highlight');
                }
            }

            if (!found) {
                alert('NIK tidak ditemukan');
            }
        }
        @if (Session::has('error'))

            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Gagal",
            });
        @elseif (Session::has('tambah'))

            Swal.fire({
                position: "center",
                icon: "success",
                title: "Pemohon Berhasil Ditambahkan",
                showConfirmButton: false,
                timer: 1500
            });
        @elseif (Session::has('update'))
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Pemohon Berhasil Di Update",
                showConfirmButton: false,
                timer: 1500
            });
        @elseif(())
        @endif
    </script>
@endsection
