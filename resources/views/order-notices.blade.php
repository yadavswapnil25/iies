<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Orders / Notices / Notifications</title>
    @include('partials.favicons')
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous" />
    <style>
      /* Orders/Notices Page Styles */
      .order-notices-container {
        max-width: var(--maxw);
        margin: 0 auto;
        padding: 40px 20px;
      }

      .page-header {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e5e7eb;
      }

      .page-header h1 {
        color: var(--brand-dark);
        font-size: 2.5rem;
        margin-bottom: 10px;
        font-weight: 600;
      }

      .page-header h1 i {
        margin-right: 12px;
        color: #4f46e5;
      }

      .page-header p {
        color: var(--muted);
        font-size: 1.1rem;
      }

      .sort-filter {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 12px;
        margin-bottom: 30px;
        padding: 16px;
        background: #f9fafb;
        border-radius: 8px;
      }

      .sort-filter label {
        font-weight: 600;
        color: #374151;
      }

      .sort-filter select {
        padding: 8px 16px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        background: white;
        cursor: pointer;
        transition: border-color 0.2s;
      }

      .sort-filter select:hover {
        border-color: #4f46e5;
      }

      .notices-list {
        background: white;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        overflow: hidden;
      }

      .notice-item {
        padding: 24px;
        border-bottom: 1px solid #e5e7eb;
        transition: background-color 0.2s;
      }

      .notice-item:last-child {
        border-bottom: none;
      }

      .notice-item:hover {
        background: #f9fafb;
      }

      .notice-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 12px;
        gap: 20px;
      }

      .notice-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1a365d;
        margin: 0;
        flex: 1;
      }

      .notice-date {
        color: #6b7280;
        font-size: 0.9rem;
        white-space: nowrap;
        font-weight: 500;
      }

      .notice-content {
        color: #4b5563;
        line-height: 1.7;
        font-size: 1rem;
      }

      .notice-content p {
        margin: 0 0 10px 0;
      }

      .notice-content p:last-child {
        margin-bottom: 0;
      }

      .no-notices {
        padding: 60px 24px;
        text-align: center;
        color: #6b7280;
      }

      .no-notices i {
        font-size: 3rem;
        color: #d1d5db;
        margin-bottom: 16px;
      }

      .no-notices p {
        font-size: 1.1rem;
      }

      /* Pagination */
      .pagination-wrapper {
        margin-top: 30px;
        display: flex;
        justify-content: center;
      }

      .pagination-wrapper ul.pagination {
        list-style: none;
        display: flex;
        gap: 8px;
        align-items: center;
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
        justify-content: center;
      }

      .pagination-wrapper ul.pagination li {
        margin: 0;
      }

      .pagination-wrapper ul.pagination a,
      .pagination-wrapper ul.pagination span {
        padding: 8px 14px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        text-decoration: none;
        color: #374151;
        font-weight: 500;
        transition: all 0.2s;
        display: inline-block;
      }

      .pagination-wrapper ul.pagination a:hover {
        background: #4f46e5;
        color: white;
        border-color: #4f46e5;
      }

      .pagination-wrapper ul.pagination li.active span {
        background: #4f46e5;
        color: white;
        border-color: #4f46e5;
      }

      .pagination-wrapper ul.pagination li.disabled span {
        color: #9ca3af;
        cursor: not-allowed;
        background: #f3f4f6;
      }

      @media (max-width: 768px) {
        .order-notices-container {
          padding: 20px 15px;
        }

        .page-header h1 {
          font-size: 2rem;
        }

        .notice-header {
          flex-direction: column;
          gap: 10px;
        }

        .notice-date {
          align-self: flex-start;
        }

        .sort-filter {
          flex-direction: column;
          align-items: stretch;
        }

        .sort-filter select {
          width: 100%;
        }
      }
    </style>
  </head>
  <body lang="en">
    @include('partials.header')

    <main id="maincontent" class="order-notices-container">
      <div class="page-header">
        <h1><i class="fas fa-bell"></i> Orders / Notices / Notifications</h1>
        <p>Stay updated with the latest orders, notices, and notifications from IIES</p>
      </div>

      <form method="get" action="{{ route('order-notices.index') }}" class="sort-filter">
        <label for="sort">Sort by:</label>
        <select name="sort" id="sort" onchange="this.form.submit()">
          <option value="desc" {{ $sort !== 'asc' ? 'selected' : '' }}>Newest to Oldest</option>
          <option value="asc" {{ $sort === 'asc' ? 'selected' : '' }}>Oldest to Newest</option>
        </select>
      </form>

      <div class="notices-list">
        @forelse($notices as $notice)
          <div class="notice-item">
            <div class="notice-header">
              <h2 class="notice-title">{{ $notice->title }}</h2>
              <div class="notice-date">
                <i class="fas fa-calendar-alt"></i> 
                {{ optional($notice->published_at ?? $notice->created_at)->format('d M, Y') }}
                <br>
                <i class="fas fa-clock"></i> 
                {{ optional($notice->published_at ?? $notice->created_at)->format('h:i A') }}
              </div>
            </div>
            <div class="notice-content">
              {!! nl2br(e($notice->content)) !!}
            </div>
          </div>
        @empty
          <div class="no-notices">
            <i class="fas fa-bell-slash"></i>
            <p>No orders, notices, or notifications available at this time.</p>
          </div>
        @endforelse
      </div>

      @if($notices->hasPages())
        <div class="pagination-wrapper">
          {{ $notices->links() }}
        </div>
      @endif
    </main>

    @include('partials.footer')
  </body>
</html>

