<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_members'     => Member::count(),
            'active_members'    => Member::where('is_active', true)->count(),
            'expiring_soon'     => Member::where('membership_expires_at', '<=', now()->addDays(30))
                                        ->where('membership_expires_at', '>=', now())
                                        ->count(),
            'upcoming_events'   => Event::where('start_date', '>=', now())
                                        ->orderBy('start_date')
                                        ->limit(5)
                                        ->get(),
            'recent_members'    => Member::latest()->limit(5)->with('membershipLevel')->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
