@extends('admin.layouts.app')

@section('title', 'Vacancies Management - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">💼 Vacancies Management</h1>
    <a href="{{ route('admin.vacancies.create') }}" class="btn btn-primary">+ Add Vacancy</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    @if($vacancies->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Sort Order</th>
                    <th>Created</th>
                    <th style="text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacancies as $item)
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
                            @if($item->application_deadline)
                                <span style="color: {{ $item->application_deadline < now() ? '#dc2626' : '#059669' }};">
                                    {{ $item->application_deadline->format('M d, Y') }}
                                </span>
                            @else
                                <span style="color: #6b7280;">No deadline</span>
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
                                <a href="{{ route('admin.vacancies.edit', $item) }}" class="btn btn-secondary" style="padding: 6px 12px; font-size: 12px;">
                                    Edit
                                </a>
                                <form action="{{ route('admin.vacancies.destroy', $item) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this vacancy?')" 
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
            <div style="font-size: 48px; color: #9ca3af; margin-bottom: 16px;">💼</div>
            <h3 style="color: #374151; margin-bottom: 8px;">No Vacancies</h3>
            <p style="color: #6b7280; margin-bottom: 20px;">Start by adding your first vacancy.</p>
            <a href="{{ route('admin.vacancies.create') }}" class="btn btn-primary">
                + Add Vacancy
            </a>
        </div>
    @endif

    @if($vacancies->hasPages())
        <div style="margin-top: 20px; text-align: center;">
            {{ $vacancies->links() }}
        </div>
    @endif
</div>
@endsection
