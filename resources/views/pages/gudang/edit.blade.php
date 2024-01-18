@extends('layouts.app')

@section('title', 'Edit Gudang')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Gudang</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Gudang</a></div>
                    <div class="breadcrumb-item">Edit Gudang</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('gudang.update', $gudang) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Gudang</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Gudang</label>
                                <input type="text"
                                    class="form-control @error('gudang')
                                    is-invalid
                                @enderror"
                                    name="gudang" value="{{ $gudang->gudang }}">
                                @error('gudang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jenis Gudang</label>
                                <select class="form-control @error('jenis_gudang') is-invalid @enderror" name="jenis_gudang">
                                    <option value="Gudang Bahan Baku" @if(old('jenis_gudang') == 'Gudang Bahan Baku') selected @endif>
                                        Gudang Bahan Baku
                                    </option>
                                    <option value="Gudang Penyimpanan Barang" @if(old('jenis_gudang') == 'Gudang Penyimpanan Barang') selected @endif>
                                        Gudang Penyimpanan Barang
                                    </option>
                                    <option value="Gudang Pusat Sortir" @if(old('jenis_gudang') == 'Gudang Pusat Sortir') selected @endif>
                                        Gudang Pusat Sortir
                                    </option>
                                </select>
                                @error('jenis_gudang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Luas(m<sup>2</sup>)</label>
                                <input type="text"
                                    class="form-control @error('luas')
                                    is-invalid
                                @enderror"
                                    name="luas" value="{{ $gudang->luas }}">
                                @error('luas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Volume(m<sup>3</sup>)</label>
                                <input type="text"
                                    class="form-control @error('volume')
                                    is-invalid
                                @enderror"
                                    name="volume" value="{{ $gudang->volume }}">
                                @error('volume')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text"
                                    class="form-control @error('keterangan')
                                    is-invalid
                                @enderror"
                                    name="keterangan" value="{{ $gudang->keterangan }}">
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                        <div class="card-footer text-left">
                            <a href="{{ route('gudang.index') }}">
                                <button class="btn btn-primary">Kembali</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
