@extends('user.template.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
              <p class="mb-4">
                Di Kelurahan Badean, pelayanan terbaik adalah fokus utama kami. Bergabunglah dan rasakan layanan istimewa.
              </p>
              {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="../assets/img/illustrations/man-with-laptop-light.png"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../sneat/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Surat Diproses</span>
          <h3 class="card-title mb-2">{{ $menunggu }}</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../sneat/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span>Surat Diterima</span>
          <h3 class="card-title text-nowrap mb-1">{{ $diterima }}</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../sneat/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span class="d-block mb-1">Surat Ditolak</span>
          <h3 class="card-title text-nowrap mb-2">{{ $ditolak }}</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../sneat/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Riwayat</span>
          <h3 class="card-title mb-2">{{ $riwayat }}</h3>
        </div>
      </div>
    </div>
  </div>
    <!--/ Transactions -->
  </div>
  <script>
    @if (Session::has('berhasil'))
        
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Anda Berhasil Login",
                showConfirmButton: false,
                timer: 1500
            });
        
    @elseif (Session::has('failed'))
        
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{ Session::get('failed') }}",
            });
            @endif
  </script>
@endsection
