@extends('layouts.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Barang Keluar</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Barang Keluar</div>
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
                                <h4>Daftar Barang Keluar</h4>
                                <div class="card-header-action">
                                <a href="{{ url('download-logbarangkeluar-pdf') }}" target="_blank" class="btn btn-success">Cetak PDF</a>
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
                                                <th>Grade</th>
                                                <th>Stok awal</th>
                                                <th>Kuantitas Keluar</th>
                                                <th>Stok Akhir</th>
                                                <th>Tanggal Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($barang as $barangs)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $barangs->kode_barang }}</td>
                                                <td>{{ $barangs->nama_barang }}</td>
                                                <td>{{ $barangs->grade }}</td>
                                                <td>{{ $barangs->stok }}</td> 
                                                <td>{{ $barangs->keluar }}</td> 
                                                <td>{{ $barangs->stok_akhir }}</td> 
                                                <td>{{ $barangs->created_at }}</td>    
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
