<!DOCTYPE html>
<html>
<head>
    <title>Berita Acara Target Operasi Ganti Meter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            font-size: 14px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .section {
            margin-bottom: 40px;
        }
        
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .content {
            margin-left: 40px;
        }
        
        .content-item {
            margin-bottom: 8px;
        }
        
        .date {
            margin-top: 30px;
            text-align: right;
        }
        
        .signature {
            margin-top: 60px;
            text-align: center;
        }
        
        .signature-item {
            display: inline-block;
            margin: 0 20px;
        }
        
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        
        page {
            page-break-after: always;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <page class="container">
        <div class="header">
            {{-- <img src="path_to_your_logo" alt="Company Logo"> --}}
            <div class="title">Berita Acara</div>
            <div class="title">Target Operasi Gantimeter</div>
        </div>
        
        <div class="section">
            <div class="section-title">I. Data Pelanggan</div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-item"><strong>ID:</strong> {{ $gantimeter->id }}</div>
                        <div class="content-item"><strong>User:</strong> {{ $gantimeter->user->name }}</div>
                        <div class="content-item"><strong>ULP:</strong> {{ $gantimeter->ulp }}</div>
                        <div class="content-item"><strong>Kode Unit:</strong> {{ $gantimeter->kd_unit }}</div>
                        <div class="content-item"><strong>ID Pelanggan:</strong> {{ $gantimeter->id_pel }}</div>
                        <div class="content-item"><strong>Nama:</strong> {{ $gantimeter->nama }}</div>
                        <div class="content-item"><strong>Alamat:</strong> {{ $gantimeter->alamat }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-item"><strong>Tarif:</strong> {{ $gantimeter->tarif }}</div>
                        <div class="content-item"><strong>Daya:</strong> {{ $gantimeter->daya }}</div>
                        <div class="content-item"><strong>Peta:</strong> {{ $gantimeter->peta }}</div>
                        <div class="content-item"><strong>Tipe:</strong> {{ $gantimeter->tipe }}</div>
                        <div class="content-item"><strong>Kelainan:</strong> {{ $gantimeter->kelainan }}</div>
                        <div class="content-item"><strong>Petugas:</strong> {{ $gantimeter->petugas }}</div>
                        <div class="content-item"><strong>Status:</strong> {{ $gantimeter->status }}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section">
            <div class="section-title">II. Data Operasi Kerjaan</div>
            <div class="content">
                <!-- Isi data operasi kerjaan di sini -->
            </div>
        </div>
        
        <div class="signature">
            <div class="signature-item">
                <div class="content-item">Tanda Tangan Petugas</div>
                <div class="content-item">________________________</div>
            </div>
            <div class="signature-item">
                <div class="content-item">Tanda Tangan Manager</div>
                <div class="content-item">________________________</div>
            </div>
            <div class="signature-item">
                <div class="content-item">Tanda Tangan Direktur</div>
                <div class="content-item">________________________</div>
            </div>
        </div>
        
        <div class="date">
            Dibuat pada: {{ now() }}
        </div>
    </page>
</body>
</html>
