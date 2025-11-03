@extends('admin.layouts.app')

@section('content')
<div class="page-header" style="display:flex;justify-content:space-between;align-items:center;">
  <h1 class="page-title">🔔 Edit Order / Notice / Notification</h1>
  <a href="{{ route('admin.order-notices.index') }}" class="btn btn-secondary">← Back</a>
</div>

<div class="card">
  <form method="post" action="{{ route('admin.order-notices.update', $notice) }}">
    @csrf
    @method('PUT')

    <div style="margin-bottom:20px;">
      <h3 style="color:#374151;margin-bottom:15px;">Details</h3>

      <div style="margin-bottom:15px;">
        <label for="title" style="display:block;margin-bottom:5px;font-weight:600;color:#374151;">Title *</label>
        <input type="text" id="title" name="title" value="{{ old('title', $notice->title) }}" placeholder="Enter title" required style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:6px;@error('title') border-color:#dc2626; @enderror">
        @error('title')<div style="color:#dc2626;font-size:14px;margin-top:5px;">{{ $message }}</div>@enderror
      </div>

      <div style="margin-bottom:15px;">
        <label for="content" style="display:block;margin-bottom:5px;font-weight:600;color:#374151;">Content *</label>
        <textarea id="content" name="content" rows="8" required style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:6px;@error('content') border-color:#dc2626; @enderror" placeholder="Write the order/notice text here...">{{ old('content', $notice->content) }}</textarea>
        @error('content')<div style="color:#dc2626;font-size:14px;margin-top:5px;">{{ $message }}</div>@enderror
      </div>

      <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:15px;">
        <div>
          <label for="published_at" style="display:block;margin-bottom:5px;font-weight:600;color:#374151;">Publish Date & Time</label>
          <input type="datetime-local" id="published_at" name="published_at" value="{{ old('published_at', optional($notice->published_at)->format('Y-m-d\\TH:i')) }}" style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:6px;">
          <small style="color:#6b7280;font-size:12px;">Optional</small>
        </div>
        <div>
          <label style="display:block;margin-bottom:5px;font-weight:600;color:#374151;">Status</label>
          <div style="display:flex;align-items:center;gap:8px;">
            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $notice->is_active) ? 'checked' : '' }} style="margin:0;">
            <label for="is_active" style="margin:0;font-weight:normal;">Active</label>
          </div>
        </div>
      </div>
    </div>

    <div style="display:flex;gap:10px;justify-content:flex-end;border-top:1px solid #e5e7eb;padding-top:20px;">
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('admin.order-notices.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</div>
@endsection


