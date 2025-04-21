<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold mb-10 text-center">Our Blog</h1>

                    <!-- Blog List -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($blogs as $blog)
                            <div class="bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden">
                                <!-- Blog Thumbnail -->
                                <img src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : 'https://via.placeholder.com/400x200' }}" 
                                    alt="Blog Thumbnail" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <!-- Blog Category -->
                                    <span class="text-blue-400 text-sm font-medium">{{ $blog->category }}</span>
                                    <!-- Blog Title -->
                                    <h3 class="text-lg font-bold mt-2">{{ $blog->title }}</h3>
                                    <!-- Blog Author and Date -->
                                    <p class="text-gray-400 text-xs mt-4">By {{ $blog->author }} | {{ $blog->created_at->format('M d, Y') }}</p>
                                    <!-- Read More Link -->
                                    <a href="{{ route('blog.show', $blog->id) }}" class="text-blue-400 text-sm font-medium mt-4 inline-block hover:underline">Read More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-10 text-center">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>