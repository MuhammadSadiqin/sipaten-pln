@extends('layouts.master')
@section('content')
<div class="main-panel">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-wrapper">
            <!-- Header konten Anda di sini -->

            <!-- Tabel Riwayat -->
            <div class="card">
                <div class="card-header">Riwayat AMR</div>
                <div class="card-body card-dashboard table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>ULP</th>
                                <th>Kode Unit</th>
                                <th>ID Pelanggan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tarif</th>
                                <th>Daya</th>
                                <th>Peta</th>
                                <th>Tipe</th>
                                <th>Kelainan</th>
                                <th>Status</th>
                                <th>PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($historyAmr as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->ulp }}</td>
                                    <td>{{ $item->kd_unit }}</td>
                                    <td>{{ $item->id_pel }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->tarif }}</td>
                                    <td>{{ $item->daya }}</td>
                                    <td>{{ $item->peta }}</td>
                                    <td>{{ $item->tipe }}</td>
                                    <td>{{ $item->kelainan }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        @if ($item->status == 'Selesai')
                                            <a href="{{ route('generatepdf.amr', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Generate PDF</a>
                                        @elseif ($item->status == 'Tunda' || $item->status == 'Belum')
                                            <button class="btn btn-secondary btn-sm" disabled>Generate PDF</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="14">Tidak ada data riwayat</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Tabel Riwayat -->

            <!-- Tombol Kembali -->
            <div class="text-center mt-3">
                <a href="{{ route('amr.index') }}" class="btn btn-outline-primary">Kembali ke AMR</a>
            </div>
            <!--/ Tombol Kembali -->

        </div>
    </div>
    <!-- END : Akhir Konten Utama-->
</div>
@endsection



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional styles or custom CSS can be added here -->
</head>
<body>

<div class="main-panel">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-wrapper">
            <!-- Header konten Anda di sini -->

            <!-- Tabel Riwayat -->
            <div class="card">
                <div class="card-header">Riwayat AMR</div>
                <div class="card-body card-dashboard table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>ULP</th>
                                <th>Kode Unit</th>
                                <th>ID Pelanggan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tarif</th>
                                <th>Daya</th>
                                <th>Peta</th>
                                <th>Tipe</th>
                                <th>Kelainan</th>
                                <th>Status</th>
                                <th>PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($historyAmr as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->ulp }}</td>
                                    <td>{{ $item->kd_unit }}</td>
                                    <td>{{ $item->id_pel }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->tarif }}</td>
                                    <td>{{ $item->daya }}</td>
                                    <td>{{ $item->peta }}</td>
                                    <td>{{ $item->tipe }}</td>
                                    <td>{{ $item->kelainan }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        @if ($item->status == 'Selesai')
                                            <a href="{{ route('generatepdf.amr', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Generate PDF</a>
                                        @elseif ($item->status == 'Tunda' || $item->status == 'Belum')
                                            <button class="btn btn-secondary btn-sm" disabled>Generate PDF</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="14">Tidak ada data riwayat</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Tabel Riwayat -->

            <!-- Tombol Kembali -->
            <div class="text-center mt-3">
                <a href="{{ route('amr.index') }}" class="btn btn-outline-primary">Kembali ke AMR</a>
            </div>
            <!--/ Tombol Kembali -->

        </div>
    </div>
    <!-- END : Akhir Konten Utama-->
</div>
 <!-- Include Bootstrap JS and any other scripts -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Additional scripts can be added here -->
 </body>
</html> --}}
