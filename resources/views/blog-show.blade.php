<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold mb-6">{{ $blog->title }}</h1>
                    <p class="text-gray-500 text-sm mb-4">By {{ $blog->author }} | {{ $blog->created_at->format('M d, Y') }}</p>
                    <img src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : 'https://via.placeholder.com/800x400' }}" 
                        alt="Blog Thumbnail" class="w-full h-64 object-cover rounded-lg mb-6">
                    <div class="text-gray-700 text-lg leading-relaxed">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>