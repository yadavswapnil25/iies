<?php

namespace App\Http\Controllers;

use App\Models\OrderNotice;
use Illuminate\Http\Request;

class OrderNoticeController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'desc'); // desc => newest first
        
        // Only show active notices
        $query = OrderNotice::where('is_active', true);
        
        // Apply sorting
        $query->when($sort === 'asc', function($q) {
            $q->orderByRaw('COALESCE(published_at, created_at) ASC');
        }, function($q) {
            $q->orderByRaw('COALESCE(published_at, created_at) DESC');
        });

        $notices = $query->paginate(15)->appends(['sort' => $sort]);
        
        return view('order-notices', compact('notices', 'sort'));
    }
}

