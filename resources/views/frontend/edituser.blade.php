@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{ route('user.update',['id' => $data -> id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" name="name" class="form-control" id="exampleInputNama1" placeholder="Nama Lengkap" value="{{ $data -> name }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ $data -> email }}">
                      @error('email')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form> 
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
</div>
@endsection
