@extends('admin.layouts.app')

@section('title', 'International Taxation Management - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">🌍 International Taxation Management</h1>
    <a href="{{ route('admin.international-taxations.create') }}" class="btn btn-primary">+ Add International Taxation</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    @if($internationalTaxations->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Sort Order</th>
                    <th>Created</th>
                    <th style="text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($internationalTaxations as $item)
                    <tr>
                        <td>
                            <strong>{{ $item->title }}</strong>
                            @if($item->description)
                                <br><small style="color: #6b7280;">{{ Str::limit($item->description, 100) }}</small>
                            @endif
                        </td>
                        <td>
                            <a href="{{ $item->url }}" target="_blank" style="color: #3b82f6; text-decoration: none;">
                                {{ Str::limit($item->url, 50) }}
                            </a>
                        </td>
                        <td>
                            @if($item->category)
                                <span style="background: #f3f4f6; color: #374151; padding: 4px 8px; border-radius: 4px; font-size: 12px;">
                                    {{ $item->category }}
                                </span>
                            @else
                                <span style="color: #9ca3af;">No category</span>
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
                                <a href="{{ route('admin.international-taxations.edit', $item) }}" class="btn btn-secondary" style="padding: 6px 12px; font-size: 12px;">
                                    Edit
                                </a>
                                <form action="{{ route('admin.international-taxations.destroy', $item) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this international taxation item?')" 
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
            <div style="font-size: 48px; color: #9ca3af; margin-bottom: 16px;">🌍</div>
            <h3 style="color: #374151; margin-bottom: 8px;">No International Taxation Items</h3>
            <p style="color: #6b7280; margin-bottom: 20px;">Start by adding your first international taxation item.</p>
            <a href="{{ route('admin.international-taxations.create') }}" class="btn btn-primary">
                + Add International Taxation
            </a>
        </div>
    @endif

    @if($internationalTaxations->hasPages())
        <div style="margin-top: 20px; text-align: center;">
            {{ $internationalTaxations->links() }}
        </div>
    @endif
</div>
@endsection
