<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index()
    {
        // Total users who have created blogs
        $totalUsersWithBlogs = User::has('blogs')->count();

        // Blogs created by day
        $blogsByDay = Blog::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->map(function ($item) {
                return [
                    'date' => $item->date,
                    'count' => $item->count,
                ];
            });

        return view('dashboard', compact('totalUsersWithBlogs', 'blogsByDay'));
    }
}