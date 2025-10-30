<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderNotice;
use Illuminate\Http\Request;

class OrderNoticeController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'desc'); // desc => newest first
        $query = OrderNotice::query();

        $query->when($sort === 'asc', fn($q) => $q->orderBy('published_at', 'asc'))
              ->when($sort !== 'asc', fn($q) => $q->orderByRaw('COALESCE(published_at, created_at) DESC'));

        $notices = $query->paginate(15)->appends(['sort' => $sort]);
        return view('admin.order-notices.index', compact('notices', 'sort'));
    }

    public function create()
    {
        return view('admin.order-notices.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
            'is_active' => 'nullable|boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        OrderNotice::create($data);
        return redirect()->route('admin.order-notices.index')->with('success', 'Order/Notice saved');
    }

    public function edit(OrderNotice $order_notice)
    {
        return view('admin.order-notices.edit', ['notice' => $order_notice]);
    }

    public function update(Request $request, OrderNotice $order_notice)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
            'is_active' => 'nullable|boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        $order_notice->update($data);
        return redirect()->route('admin.order-notices.index')->with('success', 'Order/Notice updated');
    }

    public function destroy(OrderNotice $order_notice)
    {
        $order_notice->delete();
        return redirect()->route('admin.order-notices.index')->with('success', 'Deleted successfully');
    }
}


