<!DOCTYPE html>
<html>
<head>
    <title>Berita Acara Target Operasi LBKB</title>
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
            <div class="title">Target Operasi LBKB</div>
        </div>
        
        <div class="section">
            <div class="section-title">I. Data Pelanggan</div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-item"><strong>ID:</strong> {{ $lbkb->id }}</div>
                        <div class="content-item"><strong>User:</strong> {{ $lbkb->user->name }}</div>
                        <div class="content-item"><strong>ULP:</strong> {{ $lbkb->ulp }}</div>
                        <div class="content-item"><strong>Kode Unit:</strong> {{ $lbkb->kd_unit }}</div>
                        <div class="content-item"><strong>ID Pelanggan:</strong> {{ $lbkb->id_pel }}</div>
                        <div class="content-item"><strong>Nama:</strong> {{ $lbkb->nama }}</div>
                        <div class="content-item"><strong>Alamat:</strong> {{ $lbkb->alamat }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-item"><strong>Tarif:</strong> {{ $lbkb->tarif }}</div>
                        <div class="content-item"><strong>Daya:</strong> {{ $lbkb->daya }}</div>
                        <div class="content-item"><strong>Peta:</strong> {{ $lbkb->peta }}</div>
                        <div class="content-item"><strong>Tipe:</strong> {{ $lbkb->tipe }}</div>
                        <div class="content-item"><strong>Kelainan:</strong> {{ $lbkb->kelainan }}</div>
                        <div class="content-item"><strong>Petugas:</strong> {{ $lbkb->petugas }}</div>
                        <div class="content-item"><strong>Status:</strong> {{ $lbkb->status }}</div>
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