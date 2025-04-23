<x-user-navbar />
<div class="bg-gray-100">

    <main class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Blog Title -->
                    <h1 class="text-3xl font-bold mb-6">{{ $blog->title }}</h1>
                    <!-- Blog Author and Date -->
                    <p class="text-gray-500 text-sm mb-4">By {{ $blog->author }} | {{ $blog->created_at->format('M d, Y') }}</p>
                    <!-- Blog Thumbnail -->
                    <img src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : 'https://via.placeholder.com/800x400' }}" 
                        alt="Blog Thumbnail" class="w-1/2 h-auto object-cover rounded-lg mb-6 mx-auto">
                    <!-- Blog Content -->
                    <div class="text-gray-700 text-lg leading-relaxed">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>