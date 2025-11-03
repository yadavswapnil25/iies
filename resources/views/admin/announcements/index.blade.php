@extends('admin.layouts.app')

@section('title', 'Announcements Management - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">📢 Announcements Management</h1>
    <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary">+ Add Announcement</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    @if($announcements->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Sort Order</th>
                    <th>Created</th>
                    <th style="text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($announcements as $item)
                    <tr>
                        <td>
                            <strong>{{ $item->title }}</strong>
                        </td>
                        <td>
                            <a href="{{ $item->url }}" target="_blank" style="color: #3b82f6; text-decoration: none;">
                                {{ Str::limit($item->url, 50) }}
                            </a>
                        </td>
                        <td>
                            <span class="badge {{ $item->is_active ? 'badge-success' : 'badge-secondary' }}">
                                {{ $item->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>{{ $item->sort_order }}</td>
                        <td>{{ optional($item->created_at)->format('M d, Y') ?? '-' }}</td>
                        <td style="text-align: center;">
                            <div style="display: flex; gap: 8px; justify-content: center;">
                                <a href="{{ route('admin.announcements.edit', $item) }}" class="btn btn-secondary" style="padding: 6px 12px; font-size: 12px;">
                                    Edit
                                </a>
                                <form action="{{ route('admin.announcements.destroy', $item) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this announcement?')" 
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
            <div style="font-size: 48px; color: #9ca3af; margin-bottom: 16px;">📢</div>
            <h3 style="color: #374151; margin-bottom: 8px;">No Announcements</h3>
            <p style="color: #6b7280; margin-bottom: 20px;">Start by adding your first announcement.</p>
            <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary">
                + Add Announcement
            </a>
        </div>
    @endif

    @if($announcements->hasPages())
        <div style="margin-top: 20px; text-align: center;">
            {{ $announcements->links() }}
        </div>
    @endif
</div>
@endsection
