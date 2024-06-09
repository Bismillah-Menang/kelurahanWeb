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
        .header, .footer {
            text-align: center;
        }
        .header-table {
            width: 100%;
            margin-bottom: 20px;
        }
        .header-table td {
            vertical-align: top;
            text-align: center;
        }
        .header img {
            width: 80px;
            height: auto;
        }
        .header-text {
            text-align: center;
        }
        .header-text h2, .header-text h3, .header-text p {
            margin: 0;
        }
        .content {
            margin-top: 20px;
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
        .content table, .content th, .content td {
            border-collapse: collapse;
            border: none;
        }
        .content th, .content td {
            padding: 4px;
            text-align: left;
        }
        .content .section-title {
            font-weight: bold;
        }
        .footer {
            margin-top: 40px;
        }
        .signature {
            text-align: right;
            margin-top: 60px;
        }
        .signature .name {
            margin-bottom: 80px;
        }
        .signature .nip {
            margin-top: 80px;
        }
    </style>
</head>
<body>
    <div class="header">
        <table class="header-table">
            <tr>
                <td>
                    <img src="img/Bondowoso-min.png" alt="Logo">
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
        <div class="title">SURAT KETERANGAN</div>
        <p>Nomor: 470/430.111.8/2023</p>
        <p>Yang bertanda tangan dibawah ini Lurah Badean Kecamatan Bondowoso Kabupaten Bondowoso, dengan ini menerangkan bahwa :</p>
        <table>
            <tr>
                <td>Nama</td>
                <td>: {{ $data->nama_pemohon }}</td>
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
        <p>Adalah benar penduduk Kelurahan Badean Kecamatan Bondowoso Kabupaten Bondowoso. Menurut pengamatan kami warga tersebut keadaan ekonominya tergolong warga yang kurang mampu.</p>
        <p>Surat keterangan ini dipergunakan untuk :</p>
        <p class="section-title">PERSYARATAN PENGAJUAN KIP</p>
        <p>Demikian Surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
        <div class="footer">
            <div class="date">Bondowoso, 18 Desember 2023</div>
            <p>a.n LURAH BADEAN</p>
            <p>Sekretaris,</p>
            <div class="signature">
                <p class="name">DEDY DAMARDY, S. Sos</p>
                <p class="nip">NIP 19810225 200901 1 001</p>
            </div>
        </div>
    </div>
</body>
</html>
