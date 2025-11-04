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
                <label>About (English)</label>
                <textarea name="about_en" class="form-input" rows="8" placeholder="Enter English content">{{ old('about_en', $about->about_en) }}</textarea>
                @error('about_en')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>About (Hindi)</label>
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


