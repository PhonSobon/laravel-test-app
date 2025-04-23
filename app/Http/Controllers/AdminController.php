<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use App\Models\Blog; // Import the Blog model

class AdminController extends Controller
{
    public function index()
    {
        // Fetch total users
        $totalUsers = User::count();
    
        // Fetch total content
        $totalContent = Blog::count();
    
        // Users created by day
        $dailyUserStats = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->map(function ($item) {
                return [
                    'date' => $item->date,
                    'count' => $item->count,
                ];
            })
            ->toArray();
    
        // Blogs created by day
        $dailyBlogStats = Blog::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->map(function ($item) {
                return [
                    'date' => $item->date,
                    'count' => $item->count,
                ];
            })
            ->toArray();
    
        return view('admin.dashboard', compact('totalUsers', 'totalContent', 'dailyUserStats', 'dailyBlogStats'));
    }

}