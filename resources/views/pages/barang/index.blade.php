@extends('layouts.app')

@section('title', 'Gudang List')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Gudang</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Gudang</a></div>
                    <div class="breadcrumb-item">All Gudang</div>
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
                                <h4>All Gudang</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('gudang.create') }}" class="btn btn-primary">New Gudang</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET" action="{{ route('gudang.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="gudang">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Gudang</th>
                                            <th>Jenis Gudang</th>
                                            <th>Luas</th>
                                            <th>Volume</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($gudangs as $gudang)
                                            <tr>
                                                <td>{{ $gudang->gudang }}</td>
                                                <td>{{ $gudang->jenis_gudang }}</td>
                                                <td>{{ $gudang->luas }}</td>
                                                <td>{{ $gudang->volume }}</td>
                                                <td>{{ $gudang->keterangan }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('gudang.edit', $gudang->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>

                                                        <form action="{{ route('gudang.destroy', $gudang->id) }}"
                                                            method="POST" class="ml-2">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $gudangs->withQueryString()->links() }}
                                </div>
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
