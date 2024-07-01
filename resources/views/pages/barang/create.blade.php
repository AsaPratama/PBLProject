@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Barang Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('barang.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="number" class="form-control" id="kode_barang" name="kode_barang" value="{{ old('kode_barang') }}" required>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" required>
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
