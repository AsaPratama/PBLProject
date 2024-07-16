@extends('layouts.app')

@section('title', 'New ')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Notes</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Notes</a></div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('note.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Notes</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Isi Notes</label>
                                <input type="text"
                                    class="form-control @error('subject_id')
                                    is-invalid
                                @enderror"
                                    name="isi">
                                @error('subject_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-info">Submit</button>
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
