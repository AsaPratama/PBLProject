<!-- resources/views/barang_masuk/riwayat.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Riwayat Barang Masuk</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Waktu</th>
                    <th>Grade</th>
                    <th>Kuantitas</th>
                    <th>User</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangMasuk as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->tanggal_waktu }}</td>
                        <td>{{ $barang->grade }}</td>
                        <td>{{ $barang->kuantitas }}</td>
                        <td>{{ $barang->user }}</td>
                        <td>{{ $barang->created_at }}</td>
                        <td>{{ $barang->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
