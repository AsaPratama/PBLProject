@extends('layouts.app')

@section('title', 'New Gudang')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Gudang</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Gudang</a></div>
                    <div class="breadcrumb-item">New Gudang</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('gudang.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Gudang</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Gudang</label>
                                <input type="text"
                                    class="form-control @error('gudang')
                                    is-invalid
                                @enderror"
                                    name="gudang">
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
                                    name="luas">
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
                                    name="volume">
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
                                    name="keterangan">
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
