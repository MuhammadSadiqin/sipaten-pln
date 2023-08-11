<!DOCTYPE html>
<html>
<head>
    <title>Laporan PDF - AMR</title>
</head>
<body>
    <h1>Laporan PDF - AMR</h1>
    
    <table border="1">
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
                <th>Petugas</th>
                <th>Status</th>
                <th>Waktu Di Upload</th>
                <th>Waktu Di Ubah</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($amr as $item)
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
                    <td>{{ $item->petugas }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="16">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>