@extends('admin.layouts.app')

@section('title', 'Contact Message Details')

@section('content')
<div class="page-header">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 class="page-title">Contact Message Details</h1>
        <a href="{{ route('admin.contact-messages.index') }}" class="btn btn-secondary">← Back to Messages</a>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
    <!-- Message Details -->
    <div class="card">
        <div class="card-title">Message Information</div>
        
        <div style="margin-bottom: 20px;">
            <strong>Name:</strong> {{ $contactMessage->full_name }}<br>
            <strong>Email:</strong> {{ $contactMessage->email }}<br>
            <strong>Date:</strong> {{ $contactMessage->created_at->format('F d, Y \a\t H:i') }}<br>
            <strong>Status:</strong> 
            <span class="badge badge-{{ $contactMessage->status === 'new' ? 'error' : ($contactMessage->status === 'replied' ? 'success' : 'secondary') }}">
                {{ ucfirst($contactMessage->status) }}
            </span>
        </div>

        <div style="margin-bottom: 20px;">
            <strong>Message:</strong>
            <div style="background: #f9fafb; padding: 15px; border-radius: 6px; margin-top: 8px; white-space: pre-wrap;">{{ $contactMessage->message }}</div>
        </div>

        @if($contactMessage->read_at)
        <div style="margin-bottom: 20px;">
            <strong>Read at:</strong> {{ $contactMessage->read_at->format('F d, Y \a\t H:i') }}
        </div>
        @endif

        @if($contactMessage->replied_at)
        <div style="margin-bottom: 20px;">
            <strong>Replied at:</strong> {{ $contactMessage->replied_at->format('F d, Y \a\t H:i') }}
        </div>
        @endif
    </div>

    <!-- Admin Actions -->
    <div class="card">
        <div class="card-title">Admin Actions</div>
        
        <form method="POST" action="{{ route('admin.contact-messages.update', $contactMessage) }}">
            @csrf
            @method('PUT')
            
            <div style="margin-bottom: 15px;">
                <label for="status" style="display: block; margin-bottom: 5px; font-weight: 600;">Status:</label>
                <select name="status" id="status" style="width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px;">
                    <option value="new" {{ $contactMessage->status === 'new' ? 'selected' : '' }}>New</option>
                    <option value="read" {{ $contactMessage->status === 'read' ? 'selected' : '' }}>Read</option>
                    <option value="replied" {{ $contactMessage->status === 'replied' ? 'selected' : '' }}>Replied</option>
                    <option value="closed" {{ $contactMessage->status === 'closed' ? 'selected' : '' }}>Closed</option>
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="admin_notes" style="display: block; margin-bottom: 5px; font-weight: 600;">Admin Notes:</label>
                <textarea name="admin_notes" id="admin_notes" rows="4" style="width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px; resize: vertical;">{{ $contactMessage->admin_notes }}</textarea>
            </div>

            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-primary">Update Message</button>
            </div>
        </form>

        <hr style="margin: 20px 0; border: none; border-top: 1px solid #e5e7eb;">

        <form method="POST" action="{{ route('admin.contact-messages.destroy', $contactMessage) }}" 
              onsubmit="return confirm('Are you sure you want to delete this message? This action cannot be undone.')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" style="background: #dc2626; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer;">
                Delete Message
            </button>
        </form>
    </div>
</div>

@if($contactMessage->admin_notes)
<div class="card" style="margin-top: 20px;">
    <div class="card-title">Admin Notes</div>
    <div style="background: #f9fafb; padding: 15px; border-radius: 6px; white-space: pre-wrap;">{{ $contactMessage->admin_notes }}</div>
</div>
@endif
@endsection
