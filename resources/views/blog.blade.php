<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="bg-white py-10">
        <!-- Search Bar -->
        <div class="max-w-xl mx-auto mb-10">
            <input
                type="text"
                placeholder="Search"
                class="w-full px-6 py-3 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            @php
                $tags = ['Data Engineer', 'Data Analytics', 'Data Science', 'Big Data', 'Machine Learning', 'NLP', 'AI'];
            @endphp
            @foreach ($tags as $tag)
                <a href="{{ route('blog.category', $tag) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">
                    {{ $tag }}
                </a>
            @endforeach
        </div>

        <!-- Blog Section Title -->
        <h2 class="text-center text-2xl font-bold mb-10">Our Blog</h2>

        <!-- Blog Grid -->
        <div id="blog-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
            @foreach ($blogs as $blog)
                <a href="{{ route('blog.show', $blog->id) }}" class="block bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    <!-- Blog Thumbnail -->
                    <img
                        src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : 'https://via.placeholder.com/300x200' }}"
                        alt="Blog Image"
                        class="w-full h-48 object-cover"
                    />
                    <div class="p-4">
                        <!-- Blog Category -->
                        <p class="text-sm text-blue-500 font-semibold">{{ $blog->category }}</p>
                        <!-- Blog Title -->
                        <h3 class="text-lg font-bold mb-2 text-blue-600 hover:underline">
                            {{ $blog->title }}
                        </h3>
                        <!-- Blog Description -->
                        <p class="text-sm text-gray-600 mb-4">
                            {{ Str::limit($blog->content, 100, '...') }}
                        </p>
                        <!-- Author & Date -->
                        <div class="flex items-center text-sm text-gray-500">
                            <span>{{ $blog->author }}</span>
                            <span class="ml-auto">{{ $blog->created_at->format('F d, Y') }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- View All Posts Button -->
        <div class="flex justify-center mt-8">
            <button class="px-6 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">
                load more
            </button>
        </div>
    </div>
    <script>
        let currentPage = 1; // Track the current page

        document.getElementById('load-more').addEventListener('click', function () {
            currentPage++; // Increment the page number

            // Make an AJAX request to fetch the next page of blogs
            fetch(`/blog?page=${currentPage}`)
                .then(response => response.text())
                .then(data => {
                    const parser = new DOMParser();
                    const html = parser.parseFromString(data, 'text/html');
                    const newBlogs = html.querySelector('#blog-grid').innerHTML;

                    // Append the new blogs to the existing grid
                    document.getElementById('blog-grid').innerHTML += newBlogs;

                    // Check if there are more blogs to load
                    const loadMoreButton = html.querySelector('#load-more');
                    if (!loadMoreButton) {
                        document.getElementById('load-more').style.display = 'none'; // Hide the button if no more blogs
                    }
                })
                .catch(error => console.error('Error loading more blogs:', error));
        });
    </script>
</body>
</html>