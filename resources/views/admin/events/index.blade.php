@extends('admin.layouts.app')

@section('title', 'Events Management - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">📅 Events Management</h1>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">+ Add Event</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    @if($events->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Event</th>
                    <th>Date & Time</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Sort Order</th>
                    <th>Created</th>
                    <th style="text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $item)
                    <tr>
                        <td>
                            <strong>{{ $item->title }}</strong>
                            @if($item->description)
                                <br><small style="color: #6b7280;">{{ Str::limit($item->description, 100) }}</small>
                            @endif
                            @if($item->url)
                                <br><a href="{{ $item->url }}" target="_blank" style="color: #3b82f6; text-decoration: none; font-size: 12px;">
                                    {{ Str::limit($item->url, 50) }}
                                </a>
                            @endif
                        </td>
                        <td>
                            <div style="display: flex; flex-direction: column; gap: 2px;">
                                <span style="font-weight: 600; color: {{ $item->event_date < now() ? '#dc2626' : '#059669' }};">
                                    {{ $item->event_date->format('M d, Y') }}
                                </span>
                                @if($item->event_time)
                                    <span style="color: #6b7280; font-size: 12px;">{{ $item->event_time }}</span>
                                @endif
                            </div>
                        </td>
                        <td>
                            @if($item->location)
                                <span style="color: #374151;">{{ $item->location }}</span>
                            @else
                                <span style="color: #9ca3af;">No location</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge {{ $item->is_active ? 'badge-success' : 'badge-secondary' }}">
                                {{ $item->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>{{ $item->sort_order }}</td>
                        <td>{{ $item->created_at->format('M d, Y') }}</td>
                        <td style="text-align: center;">
                            <div style="display: flex; gap: 8px; justify-content: center;">
                                <a href="{{ route('admin.events.edit', $item) }}" class="btn btn-secondary" style="padding: 6px 12px; font-size: 12px;">
                                    Edit
                                </a>
                                <form action="{{ route('admin.events.destroy', $item) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this event?')" 
                                      style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" style="background: #dc2626; color: white; padding: 6px 12px; font-size: 12px; border: none; border-radius: 4px;">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div style="text-align: center; padding: 40px;">
            <div style="font-size: 48px; color: #9ca3af; margin-bottom: 16px;">📅</div>
            <h3 style="color: #374151; margin-bottom: 8px;">No Events</h3>
            <p style="color: #6b7280; margin-bottom: 20px;">Start by adding your first event.</p>
            <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
                + Add Event
            </a>
        </div>
    @endif

    @if($events->hasPages())
        <div style="margin-top: 20px; text-align: center;">
            {{ $events->links() }}
        </div>
    @endif
</div>
@endsection
