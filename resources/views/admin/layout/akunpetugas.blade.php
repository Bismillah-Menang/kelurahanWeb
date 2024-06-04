@extends('admin.template.template-header')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card akun_user">
        <a>
            <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#tambahpetugas">Tambah Akun</button>
        </a>
        <div class="text-nowred table-responsive pt-0">
            <table id="user" class="datatables-basic table border-top">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $d)
                        <tr>
                            {{-- <td>{{ $loop -> iteration }}</td> --}}
                            <td>{{$d -> name}}</td>
                            <td>{{$d -> email}}</td>
                            <td>{{$d -> role}}</td>
                            <td class="button-table">
                                <button type="button"  data-bs-toggle="modal" data-bs-target="#editpetugas{{$d -> id}}" class="btn btn-warning">Edit</button>
                                <form action="{{ route ('petugas.delete', ['id' => $d -> id] )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <div class="modal fade" id="editpetugas{{$d -> id}}" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="modalToggleLabel">Edit  Akun User</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="/admin/akunpetugas/update/{{$d -> id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                <div class="modal-body">
                                    <label for="defaultFormControlInput" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput" required name="name" value="{{$d -> name}}" placeholder="Masukkan Nama Lengkap" aria-describedby="defaultFormControlHelp" />
                                    <label for="defaultFormControlInput" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="defaultFormControlInput" required name="email" value="{{$d -> email}}" placeholder="Masukkan Email" aria-describedby="defaultFormControlHelp" />
                                    <label for="defaultFormControlInput" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="defaultFormControlInput" name="password" placeholder="Masukkan Password" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary" data-bs-target="#modalToggle2" >Edit Akun</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                @endforeach
              </tbody>
            </table>
          </div>
          {{-- modal tambah --}}
          <div class="modal fade" id="tambahpetugas" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalToggleLabel">Tambah Akun User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('petugas.create') }}" method="POST">
                    @csrf
                <div class="modal-body">
                    <label for="defaultFormControlInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="defaultFormControlInput" name="name" placeholder="Masukkan Nama Lengkap" aria-describedby="defaultFormControlHelp" />
                    <label for="defaultFormControlInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="defaultFormControlInput" name="email" placeholder="Masukkan Email" aria-describedby="defaultFormControlHelp" />
                    <label for="defaultFormControlInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="defaultFormControlInput" name="password" placeholder="Masukkan Password" aria-describedby="defaultFormControlHelp" />
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" data-bs-target="#modalToggle2" >Tambah Akun</button>
                </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
<script>
    let table = new DataTable('#user');
</script>
<script>
    @if (Session::has('berhasil tambah'))
        
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Berhasil Tambah Akun",
                showConfirmButton: false,
                timer: 1500
            });
        
    @elseif (Session::has('failed'))
        
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Gagal Ditambahkan!",
            });
    @elseif (Session::has('failed update'))
        
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Gagal Diedit!",
            });
    @elseif(Session::has('berhasil Update'))
        
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Berhasil Update Akun",
            showConfirmButton: false,
            timer: 1500
        });
    @elseif(Session::has('berhasil hapus'))
        
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Berhasil Hapus Akun",
            showConfirmButton: false,
            timer: 1500
        });
    @endif
        </script>
@endsection