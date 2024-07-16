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
                <h1>Notes</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('home')}}">Dashboard</a></div>
                    <div class="breadcrumb-item">Notes</div>
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
                                <h4>Notes</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('note.create') }}" class="btn btn-success">Tambah Notes</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET" action="">
                                        <div class="input-group">
                                             
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Isi Notes</th>
                                            <th>Dibuat Pada</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($notes as $note)
                                            <tr>
                                                <td>{{ $note->isi }}</td>
                                                <td>{{ $note->created_at }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href={{route('note.edit', $note->id)}}
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>

                                                            <form action="{{route('note.destroy', $note->id)}}"
                                                                method="POST" class="ml-2">
                                                                @method('DELETE')
                                                                @csrf
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                   
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
