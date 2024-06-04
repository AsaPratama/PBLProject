@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="far fa-arrow-up"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Stok Terbanyak </h4>
                            </div>
                            <div class="card-body">
                                Canvendish Banana
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-arrow-down"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Stok Terendah </h4>
                            </div>
                            <div class="card-body">
                                Guava Crystal
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="far fa-archive"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Item</h4>
                            </div>
                            <div class="card-body">
                                20
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                    <textarea class="form-control" placeholder="Notes" id="floatingTextarea2" style="height: 100px" readonly></textarea>
                </div>
                <div class="col-12 mt-2">
                    <a href="{{ route('schedule.create') }}" class="btn btn-info"> <i class="fa fa-plus-circle"></i> &nbsp Notes Baru</a>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
