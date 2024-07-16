@extends('layouts.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Barang</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Barang</div>
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
                                <h4>Daftar Barang</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Tanggal Waktu</th>
                                                <th>Grade</th>
                                                <th>Stok</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->kode_barang }}</td>
                                                    <td>{{ $item->nama_barang }}</td>
                                                    <td>{{ $item->tanggal_waktu }}</td>
                                                    <td>{{ $item->grade }}</td>
                                                    <td>{{ $item->stok}}</td>
                                                    <td>
                                                        <a href="{{ route('barang.edit', $item->kode_barang) }}" class="btn btn-sm btn-info btn-icon">
                                                        <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <form action="{{ route('barang.destroy', $item->kode_barang) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger btn-icon confirm-delete" onclick="return confirm('Are you sure?')">
                                                            <i class="fas fa-times"></i> Hapus
                                                            </button>
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
            </div>
        </section>
    </div>
@endsection
