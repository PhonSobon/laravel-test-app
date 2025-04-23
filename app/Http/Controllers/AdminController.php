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

        return view('admin.dashboard', compact('totalUsers', 'totalContent'));
    }
}