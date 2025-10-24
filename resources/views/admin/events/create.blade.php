@extends('admin.layouts.app')

@section('title', 'Add Event - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">📅 Add Event</h1>
    <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">← Back to Events</a>
</div>

<div class="card">
    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        
        <div style="margin-bottom: 20px;">
            <h3 style="color: #374151; margin-bottom: 15px;">Event Information</h3>
            
            <div style="margin-bottom: 15px;">
                <label for="title" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Event Title *</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title') }}"
                    placeholder="Enter event title"
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
                    rows="4"
                    placeholder="Enter event description..."
                    style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('description') border-color: #dc2626; @enderror"
                >{{ old('description') }}</textarea>
                @error('description')
                    <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label for="event_date" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Event Date *</label>
                    <input 
                        type="date" 
                        id="event_date" 
                        name="event_date" 
                        value="{{ old('event_date') }}"
                        min="{{ date('Y-m-d') }}"
                        required
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('event_date') border-color: #dc2626; @enderror"
                    >
                    @error('event_date')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="event_time" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Event Time</label>
                    <input 
                        type="time" 
                        id="event_time" 
                        name="event_time" 
                        value="{{ old('event_time') }}"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('event_time') border-color: #dc2626; @enderror"
                    >
                    <small style="color: #6b7280; font-size: 12px;">Optional - leave empty if no specific time</small>
                    @error('event_time')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label for="location" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Location</label>
                    <input 
                        type="text" 
                        id="location" 
                        name="location" 
                        value="{{ old('location') }}"
                        placeholder="Enter event location"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('location') border-color: #dc2626; @enderror"
                    >
                    @error('location')
                        <div style="color: #dc2626; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="url" style="display: block; margin-bottom: 5px; font-weight: 600; color: #374151;">Event URL</label>
                    <input 
                        type="url" 
                        id="url" 
                        name="url" 
                        value="{{ old('url') }}"
                        placeholder="https://example.com/event-details"
                        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px; @error('url') border-color: #dc2626; @enderror"
                    >
                    <small style="color: #6b7280; font-size: 12px;">Optional - link to event details or registration</small>
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
                        value="{{ old('sort_order', 0) }}"
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
                            {{ old('is_active', true) ? 'checked' : '' }}
                            style="margin: 0;"
                        >
                        <label for="is_active" style="margin: 0; font-weight: normal;">Active</label>
                    </div>
                    <small style="color: #6b7280; font-size: 12px;">Only active events will be displayed on the homepage</small>
                </div>
            </div>
        </div>

        <div style="display: flex; gap: 10px; justify-content: flex-end; border-top: 1px solid #e5e7eb; padding-top: 20px;">
            <button type="submit" class="btn btn-primary">Create Event</button>
            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
