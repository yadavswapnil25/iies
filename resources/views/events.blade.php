<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>All Events - IIES</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous" />
    <style>
      /* Events Page Styles */
      .events-container {
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

      .events-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 24px;
        margin-bottom: 30px;
      }

      .event-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        transition: transform 0.2s, box-shadow 0.2s;
      }

      .event-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      }

      .event-header {
        background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
        color: white;
        padding: 20px;
        text-align: center;
      }

      .event-date {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .date-day {
        font-size: 2.5rem;
        font-weight: bold;
        line-height: 1;
      }

      .date-month {
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        margin-top: 4px;
      }

      .date-year {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-top: 4px;
      }

      .event-content {
        padding: 20px;
      }

      .event-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1a365d;
        margin-bottom: 12px;
        line-height: 1.4;
      }

      .event-description {
        color: #4b5563;
        line-height: 1.7;
        margin-bottom: 16px;
        font-size: 0.95rem;
      }

      .event-meta {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 16px;
        padding-top: 16px;
        border-top: 1px solid #e5e7eb;
      }

      .event-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #6b7280;
        font-size: 0.9rem;
      }

      .event-meta-item i {
        color: #4f46e5;
        width: 16px;
      }

      .event-actions {
        display: flex;
        gap: 8px;
      }

      .event-btn {
        flex: 1;
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        font-size: 0.9rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-block;
        text-align: center;
      }

      .event-btn-primary {
        background: #1a365d;
        color: white;
      }

      .event-btn-primary:hover {
        background: #2c5282;
      }

      .event-btn-secondary {
        background: #f3f4f6;
        color: #374151;
        border: 1px solid #d1d5db;
      }

      .event-btn-secondary:hover {
        background: #e5e7eb;
      }

      .no-events {
        padding: 60px 24px;
        text-align: center;
        background: white;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
      }

      .no-events i {
        font-size: 3rem;
        color: #d1d5db;
        margin-bottom: 16px;
      }

      .no-events p {
        font-size: 1.1rem;
        color: #6b7280;
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
        .events-container {
          padding: 20px 15px;
        }

        .page-header h1 {
          font-size: 2rem;
        }

        .events-grid {
          grid-template-columns: 1fr;
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

    <main id="maincontent" class="events-container">
      <div class="page-header">
        <h1><i class="fas fa-calendar-alt"></i> All Events</h1>
        <p>Stay updated with the latest events and activities from IIES</p>
      </div>

      <form method="get" action="{{ route('events.index') }}" class="sort-filter">
        <label for="sort">Filter by:</label>
        <select name="sort" id="sort" onchange="this.form.submit()">
          <option value="upcoming" {{ $sort === 'upcoming' ? 'selected' : '' }}>Upcoming Events</option>
          <option value="past" {{ $sort === 'past' ? 'selected' : '' }}>Past Events</option>
          <option value="all" {{ $sort === 'all' ? 'selected' : '' }}>All Events</option>
        </select>
      </form>

      @if($events->count() > 0)
        <div class="events-grid">
          @foreach($events as $event)
            <div class="event-card">
              <div class="event-header">
                <div class="event-date">
                  <div class="date-day">{{ $event->event_date->format('d') }}</div>
                  <div class="date-month">{{ $event->event_date->format('M') }}</div>
                  <div class="date-year">{{ $event->event_date->format('Y') }}</div>
                </div>
              </div>
              <div class="event-content">
                <h3 class="event-title">{{ $event->title }}</h3>
                @if($event->description)
                  <div class="event-description">{{ $event->description }}</div>
                @endif
                <div class="event-meta">
                  @if($event->event_time)
                    <div class="event-meta-item">
                      <i class="fas fa-clock"></i>
                      <span>{{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</span>
                    </div>
                  @endif
                  @if($event->location)
                    <div class="event-meta-item">
                      <i class="fas fa-map-marker-alt"></i>
                      <span>{{ $event->location }}</span>
                    </div>
                  @endif
                </div>
                @if($event->url)
                  <div class="event-actions">
                    <a href="{{ $event->url }}" target="_blank" class="event-btn event-btn-primary">
                      <i class="fas fa-external-link-alt"></i> Learn More
                    </a>
                  </div>
                @endif
              </div>
            </div>
          @endforeach
        </div>

        @if($events->hasPages())
          <div class="pagination-wrapper">
            {{ $events->links() }}
          </div>
        @endif
      @else
        <div class="no-events">
          <i class="fas fa-calendar-times"></i>
          <p>No events available at this time.</p>
        </div>
      @endif
    </main>

    @include('partials.footer')
  </body>
</html>

