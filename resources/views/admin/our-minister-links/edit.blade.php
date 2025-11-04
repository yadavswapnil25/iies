@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Our Minister - Document Links</h2>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('admin.our-minister-links.update') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Former Minister (URL)</label>
                <input type="url" name="url1" class="form-input" value="{{ old('url1', $links->url1) }}" placeholder="https://...">
                @error('url1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>List of Council of Minister (URL)</label>
                <input type="url" name="url2" class="form-input" value="{{ old('url2', $links->url2) }}" placeholder="https://...">
                @error('url2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>List of Officer/Staff (URL)</label>
                <input type="url" name="url3" class="form-input" value="{{ old('url3', $links->url3) }}" placeholder="https://...">
                @error('url3')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Foreign Deputation JS Level & Above (URL)</label>
                <input type="url" name="url4" class="form-input" value="{{ old('url4', $links->url4) }}" placeholder="https://...">
                @error('url4')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection


