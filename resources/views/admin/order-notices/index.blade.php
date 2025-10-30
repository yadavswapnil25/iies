@extends('admin.layouts.app')

@section('content')
<div class="admin-page">
  <div class="admin-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
    <h1><i class="fas fa-bell"></i> Orders / Notices / Notifications</h1>
    <div>
      <a href="{{ route('admin.order-notices.create') }}" class="btn btn-primary">Add New</a>
    </div>
  </div>

  <form method="get" style="margin-bottom:12px;display:flex;gap:8px;align-items:center;">
    <label>Sort by:</label>
    <select name="sort" onchange="this.form.submit()" class="form-input">
      <option value="desc" {{ $sort !== 'asc' ? 'selected' : '' }}>Newest to Oldest</option>
      <option value="asc" {{ $sort === 'asc' ? 'selected' : '' }}>Oldest to Newest</option>
    </select>
  </form>

  <div class="table-wrapper">
    <table class="table">
      <thead>
        <tr>
          <th style="width:40%">Title</th>
          <th>Content</th>
          <th style="white-space:nowrap">Date & Time</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse($notices as $n)
        <tr>
          <td>{{ $n->title }}</td>
          <td style="max-width:520px;overflow:hidden;text-overflow:ellipsis;">{{ \Illuminate\Support\Str::limit(strip_tags($n->content), 180) }}</td>
          <td>{{ optional($n->published_at ?? $n->created_at)->format('d-M-Y H:i') }}</td>
          <td style="text-align:right;white-space:nowrap">
            <a href="{{ route('admin.order-notices.edit', $n) }}" class="btn btn-sm">Edit</a>
            <form action="{{ route('admin.order-notices.destroy', $n) }}" method="post" style="display:inline" onsubmit="return confirm('Delete this item?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @empty
        <tr><td colspan="4">No records found.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div style="margin-top:12px;">{{ $notices->links() }}</div>
</div>
@endsection


