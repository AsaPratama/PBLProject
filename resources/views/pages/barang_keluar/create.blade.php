@extends('layouts.app')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Barang Keluar</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('barang_keluar.index') }}">Barang Keluar</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Create Barang Keluar</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('barang_keluar.store') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <select class="form-control" name="">
                                            <option disabled value="">Pilihan</option>
                                                <option value="">Pilihan 1</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_waktu">Tanggal Waktu</label>
                                        <input type="datetime-local" name="tanggal_waktu" id="tanggal_waktu" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="grade">Grade</label>
                                        <input type="text" name="grade" id="grade" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="kuantitas">Kuantitas</label>
                                        <input type="number" name="kuantitas" id="kuantitas" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                        <a href="{{ route('barang_keluar.index') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
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
