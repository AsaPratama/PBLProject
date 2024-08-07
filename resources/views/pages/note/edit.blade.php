@extends('layouts.app')

@section('title', 'Edit Notes')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Notes</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Notes</a></div>
                    <div class="breadcrumb-item">Edit Notes</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('note.update', $notes) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Notes</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Notes</label>
                                <input type="text"
                                    class="form-control @error('notes')
                                    is-invalid
                                @enderror"
                                    name="Notes" value="{{ $notes->isi }}" readonly>
                                @error('Notes')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Notes Baru</label>
                                <input type="text"
                                    class="form-control @error('notes')
                                    is-invalid
                                @enderror"
                                    name="isi" value="">
                                @error('luas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
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
