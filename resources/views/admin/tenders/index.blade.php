@extends('admin.layouts.app')

@section('title', 'Tender Management - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">📋 Tender Management</h1>
    <a href="{{ route('admin.tenders.create') }}" class="btn btn-primary">+ Add Tender</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    @if($tenders->count() > 0)
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
                @foreach($tenders as $tender)
                    <tr>
                        <td>
                            <strong>{{ $tender->title }}</strong>
                        </td>
                        <td>
                            <a href="{{ $tender->url }}" target="_blank" style="color: #3b82f6; text-decoration: none;">
                                {{ Str::limit($tender->url, 50) }}
                            </a>
                        </td>
                        <td>
                            <span class="badge {{ $tender->is_active ? 'badge-success' : 'badge-secondary' }}">
                                {{ $tender->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>{{ $tender->sort_order }}</td>
                        <td>{{ $tender->created_at->format('M d, Y') }}</td>
                        <td style="text-align: center;">
                            <div style="display: flex; gap: 8px; justify-content: center;">
                                <a href="{{ route('admin.tenders.edit', $tender) }}" class="btn btn-secondary" style="padding: 6px 12px; font-size: 12px;">
                                    Edit
                                </a>
                                <form action="{{ route('admin.tenders.destroy', $tender) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this tender?')" 
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
            <div style="font-size: 48px; color: #9ca3af; margin-bottom: 16px;">📋</div>
            <h3 style="color: #374151; margin-bottom: 8px;">No Tenders</h3>
            <p style="color: #6b7280; margin-bottom: 20px;">Start by adding your first tender.</p>
            <a href="{{ route('admin.tenders.create') }}" class="btn btn-primary">
                + Add Tender
            </a>
        </div>
    @endif

    @if($tenders->hasPages())
        <div style="margin-top: 20px; text-align: center;">
            {{ $tenders->links() }}
        </div>
    @endif
</div>
@endsection