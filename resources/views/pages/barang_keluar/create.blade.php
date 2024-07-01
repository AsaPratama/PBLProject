@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Barang Keluar</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('barang_keluar.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ old('kode_barang') }}" required>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal_waktu">Tanggal Waktu</label>
                <input type="datetime-local" class="form-control" id="tanggal_waktu" name="tanggal_waktu" value="{{ old('tanggal_waktu') }}" required>
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}" required>
            </div>

            <div class="form-group">
                <label for="kuantitas">Kuantitas</label>
                <input type="number" class="form-control" id="kuantitas" name="kuantitas" value="{{ old('kuantitas') }}" required>
            </div>

            <div class="form-group">
                <label for="user">User</label>
                <input type="text" class="form-control" id="user" name="user" value="{{ old('user') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
