@extends('admin.layouts.app')

@section('title', 'Edit International Taxation - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">🌍 Edit International Taxation</h1>
    <a href="{{ route('admin.international-taxations.index') }}" class="btn btn-secondary">← Back to International Taxation</a>
</div>

<div class="card">
    <form action="{{ route('admin.international-taxations.update', $internationalTaxation) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div style="margin-bottom: 20px;">
            <h3 style="color: #374151; margin-bottom: 15px;">International Taxation Information</h3>
            
            <div style="margin-bottom: 15px;">
                <label for="title" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Title *</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $internationalTaxation->title) }}"
                    placeholder="Enter international taxation title"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('title') border-color: #dc2626; @enderror"
                >
                @error('title')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="url" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">URL *</label>
                <input 
                    type="url" 
                    id="url" 
                    name="url" 
                    value="{{ old('url', $internationalTaxation->url) }}"
                    placeholder="https://example.com/international-taxation"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('url') border-color: #dc2626; @enderror"
                >
                @error('url')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="description" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Description</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4"
                    placeholder="Enter international taxation description..."
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('description') border-color: #dc2626; @enderror"
                >{{ old('description', $internationalTaxation->description) }}</textarea>
                @error('description')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Category</label>
                    <select 
                        id="category" 
                        name="category" 
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('category') border-color: #dc2626; @enderror"
                    >
                        <option value="">Select Category</option>
                        <option value="Tax Treaties" {{ old('category', $internationalTaxation->category) == 'Tax Treaties' ? 'selected' : '' }}>Tax Treaties</option>
                        <option value="Treaty Comparison" {{ old('category', $internationalTaxation->category) == 'Treaty Comparison' ? 'selected' : '' }}>Treaty Comparison</option>
                        <option value="Transfer Pricing" {{ old('category', $internationalTaxation->category) == 'Transfer Pricing' ? 'selected' : '' }}>Transfer Pricing</option>
                        <option value="Double Taxation" {{ old('category', $internationalTaxation->category) == 'Double Taxation' ? 'selected' : '' }}>Double Taxation</option>
                        <option value="Tax Information Exchange" {{ old('category', $internationalTaxation->category) == 'Tax Information Exchange' ? 'selected' : '' }}>Tax Information Exchange</option>
                        <option value="Other" {{ old('category', $internationalTaxation->category) == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('category')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="sort_order" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Sort Order</label>
                    <input 
                        type="number" 
                        id="sort_order" 
                        name="sort_order" 
                        value="{{ old('sort_order', $internationalTaxation->sort_order) }}"
                        min="0"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('sort_order') border-color: #dc2626; @enderror"
                    >
                    <small style="color: #6b7280; font-size: 12px;">Lower numbers appear first</small>
                    @error('sort_order')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Status</label>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <input 
                        type="checkbox" 
                        id="is_active" 
                        name="is_active" 
                        value="1" 
                        {{ old('is_active', $internationalTaxation->is_active) ? 'checked' : '' }}
                        style="margin: 0;"
                    >
                    <label for="is_active" style="margin: 0; font-weight: normal;">Active</label>
                </div>
                <small style="color: #6b7280; font-size: 12px;">Only active items will be displayed on the homepage</small>
            </div>
        </div>

        <div style="display: flex; gap: 10px; justify-content: flex-end; border-top: 1px solid #e5e7eb; padding-top: 20px;">
            <button type="submit" class="btn btn-primary">Update International Taxation</button>
            <a href="{{ route('admin.international-taxations.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
