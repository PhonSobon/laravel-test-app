<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserPhotoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/feature', function () {
    return view('feature');
})->name('feature');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/blog', function () {
    return view('blog');
})->middleware(['auth'])->name('blog');

Route::get('/create-blog', function () {
    return view('create-blog');
})->middleware(['auth'])->name('create-blog');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/blog', function () {
    $blogs = Blog::latest()->paginate(9); // Fetch blogs with pagination
    return view('blog', compact('blogs'));
})->middleware(['auth'])->name('blog');

Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{category}', [BlogController::class, 'filterByCategory'])->name('blog.category');

// Use resource routing for ProductController to handle all CRUD operations
Route::resource('products', ProductController::class);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
