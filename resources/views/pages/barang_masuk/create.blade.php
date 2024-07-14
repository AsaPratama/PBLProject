@extends('layouts.app')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Barang Masuk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('barang_masuk.index') }}">Barang Masuk</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert') <!-- Pastikan ini sudah sesuai dengan layout Anda -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Create Barang Masuk</h4>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('barang_masuk.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <select class="form-control" name="">
                                            <option disabled value="">Pilihan</option>
                                                <option value="">Pilihan 1</option>
                                        </select>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
