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
            <a><button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#pengajuan">Pengajuan Surat
                </button></a>
            <div class="text-nowrap table-responsive pt-0">
                <table id="pemohon" class="datatables-basic table border-top">
                    <thead>
                        <tr>
                            <th>Tanggal Pengajuan</th>
                            <th>Waktu Pengajuan</th>
                            <th>Foto KK</th>
                            <th>Foto KTP</th>
                            <th>Status Pengajuan</th>
                            <th>PDF Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pengajuan" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalToggleLabel">Pengajuan Surat Keterangan Tidak Mampu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/user/tambahsktm" method="POST">
                    @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        

                        
                        <label for="defaultFormControlInput" class="form-label">NIK</label>
                        <div class="input-group">
                            <input type="text" class="form-control " id="nik"
                                placeholder="NIK Pemohon" aria-describedby="defaultFormControlHelp" name="nik"/>
                            <button type="button" class="btn btn-warning" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Cari Pemohon</button>
                        </div>
                        <label for="defaultFormControlInput" class="form-label">Nama Pemohon</label>
                        <input type="text" class="form-control mb-1" id="nama_pemohon"
                            placeholder="Masukkan Nama Pemohon" aria-describedby="defaultFormControlHelp" name="nama_pemohon"/>
       
                        <input type="hidden" class="form-control mb-1" id="id_pemohon"
                            placeholder="Masukkan Nama Pemohon" aria-describedby="defaultFormControlHelp" name="id_pemohon"/>
                        <label for="defaultFormControlInput" class="form-label">Alamat</label>
                        <input type="text" class="form-control mb-1" id="alamat"
                            placeholder="Alamat Pemohon" aria-describedby="defaultFormControlHelp" name="alamat" />
                        <div class="mb-2">
                            <label for="defaultSele" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control mb-2" name="tempat_lahir" id="jenis_kelamin"
                            placeholder="Masukkan Jenis Kelamin" aria-describedby="defaultFormControlHelp" />
                        </div>
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
                        <label for="defaultFormControlInput" class="form-label mb-2">Pekerjaan</label>
                        <input type="text" class="form-control mb-2" name="pekerjaan" id="pekerjaan"
                            placeholder="Masukkan Pekerjaan" aria-describedby="defaultFormControlHelp" name="pekerjaan"/>

                        <label for="pilih_rt" class="form-label mb-2">RT</label>
                        <select id="pilih_rt" class="form-select mb-2" name="pilih_rt">
                            <?php
                            $rt_options = array_map(function ($i) {
                                return 'rt ' . str_pad($i, 2, '0', STR_PAD_LEFT);
                            }, range(1, 36));
                            
                            foreach ($rt_options as $option) {
                                echo "<option value='$option'>$option</option>";
                            }
                            ?>
                        </select>
                        <label for="defaultFormControlInput" class="form-label mb-2">Nama Orang Tua Pemohon</label>
                        <input type="text" class="form-control mb-2" id="defaultFormControlInput"
                            placeholder="Masukkan Nama Pemohon" aria-describedby="defaultFormControlHelp" name="nama_ortu" />
                        <div class="mb-2">
                            <label for="defaultSelect" class="form-label">Jenis Kelamin</label>
                            <select id="defaultSelect" class="form-select" name="jenis_kelamin">
                                <option>Jenis Kelamin</option>
                                <option value="1">Laki - laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <label for="defaultFormControlInput" class="form-label mb-2">Pekerjaan</label>
                        <input type="text" class="form-control mb-2" name="pekerjaan" id="pekerjaan"
                            placeholder="Masukkan Pekerjaan Orang Tua" aria-describedby="defaultFormControlHelp" />
                        <label for="defaultFormControlInput" class="form-label">Alamat</label>
                        <input type="text" class="form-control mb-1" id="defaultFormControlInput"
                            placeholder="Alamat Orang Tua Pemohon" aria-describedby="defaultFormControlHelp" name="alamatorangtua"/>
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
                          <input type="text" class="form-control mb-1" id="keperluan"
                              placeholder="Masukkan Keperluan" aria-describedby="defaultFormControlHelp" name="keperluan"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  type="submit" class="btn btn-primary">Ajukan Surat</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalToggle2" aria-hidden="true" aria-labelledby="modalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalToggleLabel2">Modal 2</h5>
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
                                    '{{ $item->tanggal_lahir }}','{{ $item->agama }}','{{ $item->pekerjaan }}', '{{ $item->id_pemohon }}')" 
                                        data-bs-target="#pengajuan" data-bs-toggle="modal" data-bs-dismiss="modal">Pilih Pemohon</button>
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
      <script>
        function ambildata(nik, nama_pemohon, alamat, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pekerjaan, id_pemohon) {
            document.getElementById('nik').value=nik;
            document.getElementById('nama_pemohon').value=nama_pemohon;
            document.getElementById('alamat').value=alamat;
            document.getElementById('jenis_kelamin').value=jenis_kelamin;
            document.getElementById('tempat_lahir').value=tempat_lahir;
            document.getElementById('tanggal_lahir').value=tanggal_lahir;
            document.getElementById('agama').value=agama;
            document.getElementById('pekerjaan').value=pekerjaan;
            document.getElementById('id_pemohon').value=id_pemohon;
        }
      </script>
@endsection
