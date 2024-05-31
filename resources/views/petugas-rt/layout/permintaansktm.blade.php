@extends('petugas-rt.template.template-header')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card sktmrt">
        <div class="text-nowred table-responsive pt-0">
            <table id="pengajuan" class="datatables-basic table border-top">
              <thead>
                <tr>
                  <th>Nama Pemohon</th>
                  <th>NIK</th>
                  <th>Keperluan</th>
                  <th>Foto KK</th>
                  <th>Foto KTP</th>
                  <th>Foto Lunas PBB</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item -> pemohon -> nama_pemohon}}</td>
                        <td>{{$item -> pemohon -> nik}}</td>
                        <td>{{$item -> keperluan}}</td>
                        <td>{{$item -> foto_kk}}</td>
                        <td>{{$item -> foto_ktp}}</td>
                        <td>{{$item -> foto_buktilunaspbb}}</td>
                        <td>{{$item -> tanggal_pengajuan}}</td>
                        <td>{{$item -> waktu_pengajuan}}</td>
                        <td>{{$item -> status}}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    let table = new DataTable('#pengajuan');
</script>
@endsection