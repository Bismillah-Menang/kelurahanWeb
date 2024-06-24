<!-- resources/views/templatesktm.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 40px;
        }

        .header,
        .footer {
            text-align: center;
        }

        .header .logo-image {
            width: 150px;
            height: auto;
        }

        .header-table {
            width: 100%;
            margin-bottom: 5px;
        }

        .header-table td {
            vertical-align: top;
            text-align: center;
        }

        .header img {
            width: 70px;
            height: auto;
        }

        .header-text {
            text-align: center;
            font-size: 15px;
        }

        .header-text h2,
        .header-text h3,
        .header-text p {
            margin: 0;
        }

        .content {
            margin-top: 5px;
        }

        .content p {
            margin: 5px 0;
        }

        .content .title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 20px;
        }

        .content table {
            width: 100%;
            margin-bottom: 20px;
        }

        .content .name {
            font-weight: bold
        }

        .content .nomor_surat {
            text-align: center;
            margin-top: 5px;
        }

        .content table,
        .content th,
        .content td {
            border-collapse: collapse;
            border: none;
        }

        .content th,
        .content td {
            padding: 4px;
            text-align: left;
        }

        .content .section-title {
            margin-top: 5px;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: center;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
        }

        .pernyataan {
            text-align: justify;
        }

        .signature {
            text-align: right;
            margin-top: 50px;
        }

        .signature .name {
            margin-bottom: 5px;
            text-decoration: underline;
            font-weight: bold;
        }

        .signature .nip {
            margin-top: 5px;
        }

        .signature .jabatan {
            margin-top: 5px;
        }
        .footer img {
            width: 100px; /* Ukuran gambar QR Code */
            height: auto;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="header">
        <table class="header-table">
            <tr>
                <td>
                    <img src="img/Bondowoso-min.png" alt="Logo" class="logo-image">
                </td>
                <td class="header-text">
                    <h2>PEMERINTAH KABUPATEN BONDOWOSO</h2>
                    <h3>KECAMATAN BONDOWOSO</h3>
                    <h3>KELURAHAN BADEAN</h3>
                    <p>Jl. KH. Jalal Anwar No. 02 Bondowoso</p>
                </td>
            </tr>
        </table>
        <hr>
    </div>
    <div class="content">
        <div class="title">SURAT KETERANGAN TIDAK MAMPU</div>
        <p class="nomor_surat">Nomor: 470/430.111.8/2023</p>
        <p>Yang bertanda tangan dibawah ini Lurah Badean Kecamatan Bondowoso Kabupaten Bondowoso, dengan ini menerangkan
            bahwa :</p>
        <table>
            <tr>
                <td>Nama</td>
                <td class="name">: {{ $data->nama_pemohon }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td class=nik">: {{ $data->nik }}</td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td class=nik">: {{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $data->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $data->pekerjaan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $data->alamat }}</td>
            </tr>
        </table>
        <p class="pernyataan">Adalah penduduk {{ $data->alamat }} Kelurahan Badean, Kecamatan Bondowoso, Kabupaten Bondowoso
            dan menurut pengamatan kami bahwa yang bersangkutan termasuk keluarga yang keberadaan ekonominya kurang/tidak mampu.
        </p>
        <p>Surat keterangan ini dipergunakan untuk :</p>
        <p class="section-title">
            @if (isset($databerkas))
                <p class="section-title">{{ $databerkas->keperluan }}</p>
            @elseif(isset($pengajuan))
                <p class="section-title">{{ $pengajuan->keperluan }}</p>
            @else
                <p class="section-title">Data not found</p>
            @endif
        </p>
        <p>Demikian Surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
        <div class="footer">
            <div class="date">Bondowoso, {{ $tanggalPDF }}</div>
            <p class="jabatan">Kepala Kelurahan Badean</p>
            <div class="signature">
                <p><img src="img/qr-code.png" alt="Logo" class="logo-image"</p>
                <p class="name">Yashinta Galuh Ditriyanti,S.STP, M.Si</p>
                <p class="nip">NIP 19920301 201406 2 001    </p>
            </div>
        </div>
    </div>
</body>

</html>
