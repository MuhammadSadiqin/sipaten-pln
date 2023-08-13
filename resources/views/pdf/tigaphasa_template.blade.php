<!DOCTYPE html>
<html>
<head>
    <title>Berita Acara Target Operasi TigaPhasa</title>
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
    </style>
</head>
<body>
    <page class="container">
        <div class="header">
            {{-- <img src="path_to_your_logo" alt="Company Logo"> --}}
            <div class="title">Berita Acara</div>
            <div class="title">Target Operasi Tigaphasa</div>
        </div>
        
        <div class="section">
            <div class="section-title">I. Data Pelanggan</div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-item"><strong>ID:</strong> {{ $tigaphasa->id }}</div>
                        <div class="content-item"><strong>User:</strong> {{ $tigaphasa->user->name }}</div>
                        <div class="content-item"><strong>ULP:</strong> {{ $tigaphasa->ulp }}</div>
                        <div class="content-item"><strong>Kode Unit:</strong> {{ $tigaphasa->kd_unit }}</div>
                        <div class="content-item"><strong>ID Pelanggan:</strong> {{ $tigaphasa->id_pel }}</div>
                        <div class="content-item"><strong>Nama:</strong> {{ $tigaphasa->nama }}</div>
                        <div class="content-item"><strong>Alamat:</strong> {{ $tigaphasa->alamat }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-item"><strong>Tarif:</strong> {{ $tigaphasa->tarif }}</div>
                        <div class="content-item"><strong>Daya:</strong> {{ $tigaphasa->daya }}</div>
                        <div class="content-item"><strong>Peta:</strong> {{ $tigaphasa->peta }}</div>
                        <div class="content-item"><strong>Tipe:</strong> {{ $tigaphasa->tipe }}</div>
                        <div class="content-item"><strong>Kelainan:</strong> {{ $tigaphasa->kelainan }}</div>
                        <div class="content-item"><strong>Petugas:</strong> {{ $tigaphasa->petugas }}</div>
                        <div class="content-item"><strong>Status:</strong> {{ $tigaphasa->status }}</div>
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
