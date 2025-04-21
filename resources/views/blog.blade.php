<x-app-layout>
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
                <span class="bg-blue-400 text-white text-sm px-4 py-2 rounded-full cursor-pointer hover:bg-blue-500 transition">
                    {{ $tag }}
                </span>
            @endforeach
        </div>

        <!-- Blog Section Title -->
        <h2 class="text-center text-2xl font-bold mb-10">Our Blog</h2>

        <!-- Blog Grid -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 px-4">
            @foreach ($blogs as $blog)
                <div class="bg-gray-900 rounded-lg overflow-hidden shadow-md">
                    <!-- Blog Thumbnail -->
                    <img
                        src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : 'https://via.placeholder.com/300x150' }}"
                        alt="Blog Image"
                        class="w-full h-36 object-cover"
                    />
                    <div class="p-3">
                        <!-- Blog Category -->
                        <p class="text-xs text-blue-400 font-medium mb-1">{{ $blog->category }}</p>
                        <!-- Blog Title -->
                        <h3 class="font-semibold text-sm leading-snug">{{ $blog->title }}</h3>

                        <!-- Author & Date -->
                        <div class="flex items-center mt-3 text-xs text-gray-400 space-x-2">
                            <img src="{{ $blog->author_avatar ?? 'https://i.pravatar.cc/32' }}" class="w-5 h-5 rounded-full" />
                            <span>{{ $blog->author }}</span>
                            <span>{{ $blog->created_at->format('F d, Y') }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="mt-10 text-center">
            <button class="px-6 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">
                View All Post
            </button>
        </div>
    </div>
</x-app-layout>