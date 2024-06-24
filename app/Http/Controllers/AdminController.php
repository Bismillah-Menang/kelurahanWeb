<?php

namespace App\Http\Controllers;

use App\Models\PemohonModel;
use App\Models\PengajuanModel;
use App\Models\User;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //Dashboard Views
    function dashboardindex()
    {
        return view('frontend.dashboard');
    }
    function showAdminDashboard()
    {
        return view('admin.layout.dashboard', [
            'tittle' => 'Dashboard',
        ]);
    }
    function showakunuser()
    {
        $data = User::where('role', 'user')->get();
        return view('admin.layout.akunuser', [
            'tittle' => ' Data Akun User',
            'data' => $data,
        ]);
    }
    function showakunpetugas()
    {
        $data = User::where('role', 'petugas_rt')->get();
        return view('admin.layout.akunpetugas', [
            'tittle' => ' Data Akun Petugas RT',
            'data' => $data,
        ]);
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    function make(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($request->all());
        if ($validator->fails()) {
            return redirect()->route('showUser')->with(Session::flash('failed', true));
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user', // Assigning the role as 'user'
            ];

            User::create($data);
            return redirect()->route('showUser')->with(Session::flash('berhasil tambah', true));
        }
    }
    //method edit data user
    function edit(Request $request, $id)
    {
        $data = User::find($id);
        return view('frontend.edituser', compact('data'));
    }

    function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('showUser')->with(Session::flash('failed update', true));
        }
        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);

        User::whereId($id)->update($data);
        return redirect()->route('showUser')->with(Session::flash('berhasil Update', true));
    }

    function delete(Request $request, $id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('showUser')->with(Session::flash('berhasil hapus', true));
    }

    function createPetugas(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($request->all());
        if ($validator->fails()) {
            return redirect()->route('showPetugas')->with(Session::flash('failed', true));
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'petugas_rt', // Assigning the role as 'user'
            ];

            User::create($data);
            return redirect()->route('showPetugas')->with(Session::flash('berhasil tambah', true));
        }
    }
    //Make User Petugas
    function indexpetugas()
    {
        $data = User::where('role', 'petugas')->get();
        return view('frontend.indexPetugas', compact('data'));
    }
    function deletePetugas(Request $request, $id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('showUser')->with(Session::flash('berhasil hapus', true));
    }

    function updatePetugas(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('showPetugas')->with(Session::flash('failed update', true));
        }
        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);

        User::whereId($id)->update($data);
        return redirect()->route('showPetugas')->with(Session::flash('berhasil Update', true));
    }

    function showsktmadmin()
    {
        $data = PengajuanModel::where('jenis_layanan', 'sktm')->where('status', 'menunggu Verifikasi Admin')->with('pemohon')->get();
        return view('admin.layout.pengajuansktmadmin', [
            'tittle' => 'Permintaan Pengajuan SKTM',
            'data' => $data,
        ]);
    }

    function ubahstatusadmin(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pilihstatus' => 'required',
            'inputketerangan' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('showsktmadmin')->with(Session::flash('failed update', true));
        }

        $pengajuan = PengajuanModel::find($id);
        $pengajuan->status = $request->pilihstatus;

        // Jika status 'Verifikasi Diterima', panggil fungsi untuk generate dan simpan PDF
        if ($request->pilihstatus == 'Verifikasi Diterima') {
            $this->verifikasiSuratDiterima($id);
        } else {
            $pengajuan->save();
        }

        return redirect()->route('showsktmadmin')->with(Session::flash('berhasil update', true));
    }

    function showtemplatesktm($id)
    {
        // Ambil data berdasarkan ID
        $data = PemohonModel::findOrFail($id);
        $databerkas = PengajuanModel::findOrFail($id);
        $tanggalPDF = Carbon::now()->format('d F Y'); // Format tanggal sesuai keinginan
        // Kirim data ke view dan buat PDF
        $pdf = PDF::loadView('templatesktm', compact('data', 'databerkas','tanggalPDF'))->setPaper('Legal', 'portrait');

        return $pdf->stream('sktm.pdf');
    }

    function verifikasiSuratDiterima($id)
    {
    // Ambil data pengajuan berdasarkan ID
    $pengajuan = PengajuanModel::findOrFail($id);
    // Ambil data pemohon yang berhubungan
    $data = PemohonModel::findOrFail($pengajuan->id_pemohon);
    // Format tanggal untuk digunakan di PDF
    $tanggalPDF = Carbon::now()->format('d F Y'); // Format tanggal sesuai keinginan

    // Generate PDF menggunakan data pemohon dan data pengajuan
    $pdf = PDF::loadView('templatesktm', compact('data', 'pengajuan', 'tanggalPDF'))
        ->setPaper('Legal', 'portrait');

    // Simpan PDF ke storage
    $pdfPath = 'surat_' . time() . '.pdf'; // Nama file dapat disesuaikan sesuai kebutuhan
    $pdf->save(storage_path('app/public/' . $pdfPath));

    // Update data pengajuan dengan nama file PDF
    $pengajuan->pdf_surat = $pdfPath;
    $pengajuan->status = 'Verifikasi Diterima';
    $pengajuan->save(); // Update pengajuan yang sudah ada

    // Redirect atau response sesuai kebutuhan
    return redirect()->route('showsktmadmin')->with('success', 'Berhasil update');
    }

    function showRiwayat()
    {
        $data = PengajuanModel::where('status', 'Verifikasi Diterima')->with('pemohon')->get();
        return view('admin.layout.riwayat', [
            'tittle' => 'Riwayat Pengajuan Surat',
            'data' => $data,
        ]);
    }

    public function deleteOldRecords()
    {
        $threshold = now()->subDay(1); // 24 hours ago
        PengajuanModel::where('status', 'Verifikasi Diterima')->where('updated_at', '<', $threshold)->delete();
    }

    public function deleteRiwayat($id)
    {
        $data = PengajuanModel::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('showriwayat')->with(Session::flash('berhasil hapus', true));
    }

    public function showLaporanMingguan()
    {
        // Ambil semua pengajuan yang statusnya 'Verifikasi Diterima'
        $pengajuan = PengajuanModel::where('status', 'Verifikasi Diterima')->get();

        // Buat array untuk menampung data pengajuan per minggu
        $laporanMingguan = [];

        foreach ($pengajuan as $surat) {
            $tanggalVerifikasi = Carbon::parse($surat->updated_at);
            $mingguKe = $tanggalVerifikasi->weekOfMonth; // Mendapatkan minggu ke dalam bulan

            if (!isset($laporanMingguan[$mingguKe])) {
                $laporanMingguan[$mingguKe] = [];
            }

            $laporanMingguan[$mingguKe][] = $surat;
        }

        return view('admin.layout.laporanmingguan', [
            'tittle' => 'Laporan Mingguan Pengajuan Surat',
            'laporanMingguan' => $laporanMingguan,
        ]);
    }
}
