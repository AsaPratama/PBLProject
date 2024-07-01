@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Barang</h1>
        <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Grade</th>
                    <th>Stok</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td>{{ $item->kode_barang }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->grade }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>
                            <a href="{{ route('barang.edit', $item->kode_barang) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barang.destroy', $item->kode_barang) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
