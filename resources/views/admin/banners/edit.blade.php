@extends('admin.layouts.app')

@section('title', 'Edit Banner - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">🖼️ Edit Banner</h1>
    <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary">← Back to Banners</a>
</div>

<div class="card">
    <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div style="margin-bottom: 20px;">
            <h3 style="color: #374151; margin-bottom: 15px;">Banner Information</h3>
            
            <div style="margin-bottom: 15px;">
                <label for="title" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Banner Title *</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $banner->title) }}"
                    placeholder="Enter banner title"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('title') border-color: #dc2626; @enderror"
                >
                @error('title')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="description" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Description</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="3"
                    placeholder="Enter banner description..."
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('description') border-color: #dc2626; @enderror"
                >{{ old('description', $banner->description) }}</textarea>
                @error('description')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Current Image</label>
                <div style="display: flex; align-items: center; gap: 15px; padding: 15px; background: #f9fafb; border-radius: 6px; border: 1px solid #e5e7eb;">
                    <img src="{{ $banner->image_url }}" alt="{{ $banner->alt_text ?: $banner->title }}" 
                         style="width: 120px; height: 75px; object-fit: cover; border-radius: 4px; border: 1px solid #d1d5db;">
                    <div>
                        <div style="font-weight: 600; color: #374151;">{{ $banner->title }}</div>
                        <div style="font-size: 12px; color: #6b7280;">{{ $banner->image_path }}</div>
                        @if($banner->alt_text)
                            <div style="font-size: 12px; color: #374151;">Alt: {{ $banner->alt_text }}</div>
                        @endif
                    </div>
                </div>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="image" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">New Banner Image</label>
                <input 
                    type="file" 
                    id="image" 
                    name="image" 
                    accept="image/*"
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('image') border-color: #dc2626; @enderror"
                >
                <small style="color: #6b7280; font-size: 12px;">Leave empty to keep current image. Recommended size: 1600x400px. Supported formats: JPEG, PNG, JPG, GIF, WebP. Max size: 2MB</small>
                @error('image')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label for="alt_text" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Alt Text</label>
                    <input 
                        type="text" 
                        id="alt_text" 
                        name="alt_text" 
                        value="{{ old('alt_text', $banner->alt_text) }}"
                        placeholder="Enter alt text for accessibility"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('alt_text') border-color: #dc2626; @enderror"
                    >
                    <small style="color: #6b7280; font-size: 12px;">Optional - for screen readers and SEO</small>
                    @error('alt_text')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="url" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Banner URL</label>
                    <input 
                        type="url" 
                        id="url" 
                        name="url" 
                        value="{{ old('url', $banner->url) }}"
                        placeholder="https://example.com/banner-link"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('url') border-color: #dc2626; @enderror"
                    >
                    <small style="color: #6b7280; font-size: 12px;">Optional - link when banner is clicked</small>
                    @error('url')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label for="sort_order" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Sort Order</label>
                    <input 
                        type="number" 
                        id="sort_order" 
                        name="sort_order" 
                        value="{{ old('sort_order', $banner->sort_order) }}"
                        min="0"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('sort_order') border-color: #dc2626; @enderror"
                    >
                    <small style="color: #6b7280; font-size: 12px;">Lower numbers appear first</small>
                    @error('sort_order')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Status</label>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <input 
                            type="checkbox" 
                            id="is_active" 
                            name="is_active" 
                            value="1" 
                            {{ old('is_active', $banner->is_active) ? 'checked' : '' }}
                            style="margin: 0;"
                        >
                        <label for="is_active" style="margin: 0; font-weight: normal;">Active</label>
                    </div>
                    <small style="color: #6b7280; font-size: 12px;">Only active banners will be displayed on the homepage</small>
                </div>
            </div>
        </div>

        <div style="display: flex; gap: 10px; justify-content: flex-end; border-top: 1px solid #e5e7eb; padding-top: 20px;">
            <button type="submit" class="btn btn-primary">Update Banner</button>
            <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
