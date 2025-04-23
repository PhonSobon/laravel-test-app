<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

     /**
     * Display a listing of the blogs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all blogs (or paginate them)
        $blogs = Blog::paginate(12);

        // Return the blog view with the blogs data
        return view('blog', compact('blogs'));
    }

    public function store(Request $request){
    // Validate the form data
    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'content' => 'required|string',
    ]);

    // Handle file upload
    $thumbnailPath = null;
    if ($request->hasFile('thumbnail')) {
        $thumbnailPath = $request->file('thumbnail')->store('blog_thumbnails', 'public');
    }

    // Save the blog to the database
    Blog::create([
        'title' => $request->title,
        'category' => $request->category,
        'thumbnail' => $thumbnailPath,
        'content' => $request->content,
        'author' => auth()->check() ? auth()->user()->name : 'Guest', // Check if the user is authenticated
    ]);

    // Redirect to the blog page with a success message
    return redirect()->route('blog')->with('success', 'Blog created successfully!');
    }
        public function show($id){
                    $blog = Blog::findOrFail($id); // Fetch the blog by ID
                    return view('blog-show', compact('blog'));
        }
        public function filterByCategory($category)
        {
            // Fetch blogs that match the selected category
            $blogs = Blog::where('category', $category)->get();

            // Pass the blogs and category to the view
            return view('blog', compact('blogs', 'category'));
        }
    
        
}