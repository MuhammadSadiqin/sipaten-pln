<!DOCTYPE html>
<html>
<head>
    <title>Berita Acara Pengoperasian Pemeliharaan App GantiMeter PLN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 5px;
            font-size: 12px;
        }
        .logo{
            size: 10px
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .title {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .section {
            margin-bottom: 40px;
        }
        
        .section-title {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: left;
        }
        
        .content {
            margin-left: 1px;
            margin-bottom: 1px;
        }
        
        .content-item {
            margin-bottom: 1px;
            display: flex; /* Menggunakan flexbox untuk rata dengan spasi */
            font-size: 12px; /* Mengubah ukuran font konten menjadi 10px */
        }

        .content-item strong {
        /* display: inline-block; */
        width: 200px; /* Sesuaikan lebar sesuai kebutuhan */
        font-size: 12px;
    }
        
        .content-label {
            flex: 1; /* Bagian label menggunakan 1 bagian dari flexbox */
        }
        
        .content-value {
            flex: 2; /* Bagian nilai menggunakan 2 bagian dari flexbox */
        }
        
        .date {
            margin-top: 30px;
            text-align: right;
        }
        
        .signature {
            margin-top: 60px;
            text-align: left;
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

        /* Gaya untuk mengurangi ukuran tabel */
        .table-responsive {
            max-width: 1000px;
            margin: 0 auto;
        }
         /* Gaya untuk mengurangi ukuran kolom */
         th, td {
            padding: 1px 10px;
        }


        /* Tambahkan gaya untuk garis di atas page container */
        .line-above-container {
            border-top: 3px solid #000;
            margin-top: 20px;
        }
    </style>
</head>
<body>
 
        <div class="logo"> <img src="app-assets/img/icopln.png" alt="Company Logo" width="60" height="80"> </div>
           <!-- Tambahkan garis di atas page container -->
    <div class="line-above-container"></div>

    <page class="container">
        <div class="header">
            <div class="title">BERITA ACARA PENGOPERASIAN LBKB PLN</div>
            <div class="title">No:......../........./........./........./.........</div>
        </div>
        
        <div class="section">
            <div>
                Pada hari ini <span id="current-day"></span>, tanggal <span id="current-date"></span> bulan <span id="current-month"></span> tahun <span id="current-year"></span>,
                pihak PT PLN (Persero) UP3 Lhokseumawe telah melaksanakan pengoperasian pemeliharaan APP (Alat Pengukur dan Pembatas) pada pelanggan sebagai berikut:
            </div>
            
            <script>
                const currentDate = new Date();
            
                document.getElementById("current-day").textContent = new Intl.DateTimeFormat("id-ID", { weekday: "long" }).format(currentDate);
                document.getElementById("current-date").textContent = currentDate.getDate();
                document.getElementById("current-month").textContent = new Intl.DateTimeFormat("id-ID", { month: "long" }).format(currentDate);
                document.getElementById("current-year").textContent = currentDate.getFullYear();
            </script>
            <div class="content">
                <div class="row">
                    <div class="col-md-1">
                        <div class="content-item"><strong>Nama      :</strong>      <strong>{{ $lbkb->nama }}</strong></div>
                        <div class="content-item"><strong>ID Pel    :</strong>      <strong>{{ $lbkb->id_pel }}</strong></div>
                        <div class="content-item"><strong>Tarif     :</strong>      <strong>{{ $lbkb->tarif }}</strong></div>
                        <div class="content-item"><strong>Alamat    :</strong>      <strong>{{ $lbkb->alamat }}</strong>  </div>
                    </div>
                </div>
            </div>    
        </div>

             <!-- Bagian Tabel Pertama -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $lbkb->id }}</td>
                        <th>ULP</th>
                        <td>{{ $lbkb->ulp }}</td>
                    </tr>
                    <tr>
                        <th>Kode Unit</th>
                        <td>{{ $lbkb->kd_unit }}</td>
                        <th>ID Pelanggan</th>
                        <td>{{ $lbkb->id_pel }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $lbkb->nama }}</td>
                        <th>Alamat</th>
                        <td>{{ $lbkb->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Tarif</th>
                        <td>{{ $lbkb->tarif }}</td>
                        <th>Daya</th>
                        <td>{{ $lbkb->daya }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Bagian Tabel Kedua -->
        <div class="table-responsive" class="table">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Peta</th>
                        <td>{{ $lbkb->peta }}</td>
                        <th>Tipe</th>
                        <td>{{ $lbkb->tipe }}</td>
                    </tr>
                    <tr>
                        <th>Kelainan</th>
                        <td>{{ $lbkb->kelainan }}</td>
                        <th>Petugas</th>
                        <td>{{ $lbkb->petugas }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $lbkb->status }}</td>
                        <th>Alasan Tunda</th>
                        <td>{{ $lbkb->alasan_tunda }}</td>
                    </tr>
                    <tr>
                        <th>Keterangan Tunda</th>
                        <td>{{ $lbkb->ket_tunda }}</td>
                        <th>Tanggal TL</th>
                        <td>{{ $lbkb->tgl_tl }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Bagian Tabel Ketiga -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>No Hp Pelanggan</th>
                        <td>{{ $lbkb->no_hp_pelanggan }}</td>
                        <th>Nama Pelanggan</th>
                        <td>{{ $lbkb->nama_pelanggan }}</td>
                    </tr>
                    <tr>
                        <th>Nama Petugas</th>
                        <td>{{ $lbkb->nama_petugas }}</td>
                        <th>No Berita Acara</th>
                        <td>{{ $lbkb->no_berita_acara }}</td>
                        
                    </tr>
                    {{-- <tr>
                      
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <div class="signature">
            <div class="signature-item">
                <div class="content-item" style="margin-bottom: 100px;" >Konsumen</div>
                <div class="content-item" style="border-bottom: 1px solid black; width: 150px; margin-left: auto; margin-right: auto;" ></div>
            </div>
            <div class="signature-item">
                <div class="content-item" style="margin-bottom: 100px;" >Mengetahui,Manager</div>
                <div class="content-item" style="border-bottom: 1px solid black; width: 150px; margin-left: auto; "></div>
            </div>
        </div>
        
        <div class="date">
            Dibuat pada: {{ now() }}
        </div>
    </div>
    </page>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
