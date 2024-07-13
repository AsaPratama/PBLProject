@extends('layouts.app')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Barang Keluar</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Barang keluar</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Barang Keluar</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('barang_keluar.create') }}" class="btn btn-primary">Add new</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="">
                                        <div class="input-group">
                                            <!-- Add input elements here if needed -->
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Waktu</th>
                                            <th>Grade</th>
                                            <th>Kuantitas</th>
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
