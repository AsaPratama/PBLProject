<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Barang Masuk</title>
    <style>
        /* Gaya CSS untuk PDF */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Barang Masuk</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Grade</th>
                <th>Stok Awal</th>
                <th>Kuantitas Keluar</th>
                <th>Stok Akhir</th>
                <th>Tanggal Keluar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $barang)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barang->kode_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->grade }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->keluar }}</td>
                    <td>{{ $barang->stok_akhir }}</td>
                    <td>{{ $barang->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
