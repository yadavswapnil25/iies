@extends('admin.layouts.app')

@section('content')
<h1>Edit Order / Notice / Notification</h1>
<form method="post" action="{{ route('admin.order-notices.update', $notice) }}" class="form">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-input" value="{{ old('title', $notice->title) }}" required>
    @error('title')<div class="error">{{ $message }}</div>@enderror
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea name="content" class="form-input" rows="8" required>{{ old('content', $notice->content) }}</textarea>
    @error('content')<div class="error">{{ $message }}</div>@enderror
  </div>
  <div class="form-group">
    <label>Publish Date & Time</label>
    <input type="datetime-local" name="published_at" class="form-input" value="{{ old('published_at', optional($notice->published_at)->format('Y-m-d\TH:i')) }}">
  </div>
  <div class="form-group">
    <label><input type="checkbox" name="is_active" value="1" {{ old('is_active', $notice->is_active) ? 'checked' : '' }}> Active</label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="{{ route('admin.order-notices.index') }}" class="btn">Cancel</a>
</form>
@endsection


