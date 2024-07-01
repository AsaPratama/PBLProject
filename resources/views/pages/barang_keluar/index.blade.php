@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Barang Keluar</h1>
        <a href="{{ route('barang_keluar.create') }}" class="btn btn-primary mb-3">Add New</a>
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangKeluar as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->tanggal_waktu }}</td>
                        <td>{{ $barang->grade }}</td>
                        <td>{{ $barang->kuantitas }}</td>
                        <td>{{ $barang->user }}</td>
                        <td>
                            <a href="{{ route('barang_keluar.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barang_keluar.destroy', $barang->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
