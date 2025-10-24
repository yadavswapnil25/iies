@extends('admin.layouts.app')

@section('title', 'Edit Vacancy - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">💼 Edit Vacancy</h1>
    <a href="{{ route('admin.vacancies.index') }}" class="btn btn-secondary">← Back to Vacancies</a>
</div>

<div class="card">
    <form action="{{ route('admin.vacancies.update', $vacancy) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div style="margin-bottom: 20px;">
            <h3 style="color: #374151; margin-bottom: 15px;">Vacancy Information</h3>
            
            <div style="margin-bottom: 15px;">
                <label for="title" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Title *</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $vacancy->title) }}"
                    placeholder="Enter vacancy title"
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
                    value="{{ old('url', $vacancy->url) }}"
                    placeholder="https://example.com/vacancy-details"
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
                    placeholder="Enter vacancy description..."
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('description') border-color: #dc2626; @enderror"
                >{{ old('description', $vacancy->description) }}</textarea>
                @error('description')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label for="application_deadline" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Application Deadline</label>
                    <input 
                        type="date" 
                        id="application_deadline" 
                        name="application_deadline" 
                        value="{{ old('application_deadline', $vacancy->application_deadline?->format('Y-m-d')) }}"
                        min="{{ date('Y-m-d') }}"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('application_deadline') border-color: #dc2626; @enderror"
                    >
                    <small style="color: #6b7280; font-size: 12px;">Leave empty for no deadline</small>
                    @error('application_deadline')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="sort_order" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Sort Order</label>
                    <input 
                        type="number" 
                        id="sort_order" 
                        name="sort_order" 
                        value="{{ old('sort_order', $vacancy->sort_order) }}"
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
                        {{ old('is_active', $vacancy->is_active) ? 'checked' : '' }}
                        style="margin: 0;"
                    >
                    <label for="is_active" style="margin: 0; font-weight: normal;">Active</label>
                </div>
                <small style="color: #6b7280; font-size: 12px;">Only active vacancies will be displayed on the homepage</small>
            </div>
        </div>

        <div style="display: flex; gap: 10px; justify-content: flex-end; border-top: 1px solid #e5e7eb; padding-top: 20px;">
            <button type="submit" class="btn btn-primary">Update Vacancy</button>
            <a href="{{ route('admin.vacancies.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
