@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Our Minister - About the Institution</h2>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('admin.our-minister-about.update') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label">About (English)</label>
                <textarea name="about_en" class="form-input" rows="8" placeholder="Enter English content">{{ old('about_en', $about->about_en) }}</textarea>
                @error('about_en')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">About (Hindi)</label>
                <textarea name="about_hi" class="form-input" rows="8" placeholder="हिंदी सामग्री दर्ज करें">{{ old('about_hi', $about->about_hi) }}</textarea>
                @error('about_hi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card-header {
        padding-bottom: 10px;
        margin-bottom: 15px;
        border-bottom: 2px solid #e5e7eb;
    }

    .card-header h2 {
        font-size: 20px;
        font-weight: 600;
        color: #111827;
        margin: 0;
    }

    .card-body {
        padding-top: 5px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 16px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #374151;
        font-size: 14px;
    }

    .form-input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #4f46e5;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
    }

    textarea.form-input {
        resize: vertical;
        font-family: inherit;
        min-height: 160px;
    }

    .text-danger {
        color: #ef4444;
        font-size: 13px;
        margin-top: 6px;
    }
</style>
@endpush

