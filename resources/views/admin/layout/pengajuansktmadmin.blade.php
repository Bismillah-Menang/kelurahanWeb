@extends('admin.template.template-header')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card sktmadmin">
        
        <div class="text-nowrap table-responsive pt-0">
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
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item -> pemohon -> nama_pemohon}}</td>
                        <td>{{$item -> pemohon -> nik}}</td>
                        <td>{{$item -> keperluan}}</td>
                        <td>{{$item -> foto_kk}}</td>
                        <td>{{$item -> foto_ktp}}</td>
                        <td>{{$item -> bukti_pengantar}}</td>
                        <td>{{$item -> tanggal_pengajuan}}</td>
                        <td>{{$item -> waktu_pengajuan}}</td>
                        <td><p data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="status dropdown-toggle">{{$item -> status}}</p>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#status{{$item -> id}}">Ubah Status</a></li>
                              </ul>
                        </td>
                    </tr>
                   
                    <div class="modal fade" id="status{{$item -> id}}" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalToggleLabel">Ubah Status</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('updatestatusadmin', ['id' => $item -> id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <label for="select-status-{{$item->id}}" class="form-label">Verifikasi</label>
                                <select id="select-status-{{$item->id}}" name="pilihstatus" class="form-select">
                                    <option value="Verifikasi Diterima">Verifikasi Diterima</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Ubah Status</button>
                            </div>
                        </form>
                          </div>
                        </div>
                      </div>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    let table = new DataTable('#pengajuan');
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[id^="status"]').forEach(function (modal) {
        var id = modal.id.replace('status', '');

        var selectElement = document.getElementById('select-status-' + id);
        var inputKeterangan = document.getElementById('inputketerangan-' + id);
        var labelKeterangan = document.getElementById('keterangan-' + id);

        function checkValue() {
            if (selectElement.value === 'Verifikasi Ditolak') {
                inputKeterangan.style.display = 'block';
                labelKeterangan.style.display = 'block';
            } else {
                inputKeterangan.style.display = 'none';
                labelKeterangan.style.display = 'none';
            }
        }

        // Initial check
        checkValue();

        // Add event listener
        selectElement.addEventListener('change', checkValue);
    });
});
</script>
<script>
    @if (Session::has('berhasil update'))
        
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Berhasil Di Verifikasi",
            showConfirmButton: false,
            timer: 1500
        });
    
@elseif (Session::has('failed update'))
    
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Gagal Di Verifikasi!",
        });
 @endif
</script>
@endsection