<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'upcoming'); // upcoming, past, all
        
        // Only show active events
        $query = Event::active();
        
        // Apply sorting
        if ($sort === 'past') {
            $query->where('event_date', '<', now()->toDateString())
                  ->orderBy('event_date', 'desc')
                  ->orderBy('event_time', 'desc');
        } elseif ($sort === 'all') {
            $query->orderBy('event_date', 'desc')
                  ->orderBy('event_time', 'desc');
        } else {
            // upcoming (default)
            $query->where('event_date', '>=', now()->toDateString())
                  ->orderBy('event_date', 'asc')
                  ->orderBy('event_time', 'asc');
        }

        $events = $query->paginate(12)->appends(['sort' => $sort]);
        
        return view('events', compact('events', 'sort'));
    }
}

