@extends('admin.layouts.app')

@section('title', 'Contact Messages')

@section('content')
<div class="page-header">
    <h1 class="page-title">Contact Messages</h1>
</div>

<!-- Search and Filter -->
<div class="card">
    <form method="GET" action="{{ route('admin.contact-messages.index') }}" style="display: flex; gap: 15px; align-items: center; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 200px;">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search messages..." style="width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px;">
        </div>
        <div>
            <select name="status" style="padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px;">
                <option value="">All Status</option>
                <option value="new" {{ request('status') === 'new' ? 'selected' : '' }}>New</option>
                <option value="read" {{ request('status') === 'read' ? 'selected' : '' }}>Read</option>
                <option value="replied" {{ request('status') === 'replied' ? 'selected' : '' }}>Replied</option>
                <option value="closed" {{ request('status') === 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('admin.contact-messages.index') }}" class="btn btn-secondary">Clear</a>
    </form>
</div>

<!-- Messages Table -->
<div class="card">
    @if($contactMessages->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contactMessages as $message)
                <tr>
                    <td>
                        <strong>{{ $message->full_name }}</strong>
                        @if($message->status === 'new')
                            <span style="color: #dc2626; font-size: 12px;">●</span>
                        @endif
                    </td>
                    <td>{{ $message->email }}</td>
                    <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                        {{ Str::limit($message->message, 100) }}
                    </td>
                    <td>
                        <span class="badge badge-{{ $message->status === 'new' ? 'error' : ($message->status === 'replied' ? 'success' : 'secondary') }}">
                            {{ ucfirst($message->status) }}
                        </span>
                    </td>
                    <td>{{ $message->created_at->format('M d, Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.contact-messages.show', $message) }}" class="btn btn-primary" style="padding: 4px 8px; font-size: 12px;">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div style="margin-top: 20px;">
            {{ $contactMessages->appends(request()->query())->links() }}
        </div>
    @else
        <div style="text-align: center; padding: 40px; color: #6b7280;">
            <p>No contact messages found.</p>
        </div>
    @endif
</div>
@endsection
