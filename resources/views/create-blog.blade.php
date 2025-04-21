<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-6">Create a New Blog</h1>

                    <!-- Blog Form -->
                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Blog Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input id="title" type="text" name="title" value="{{ old('title') }}" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter the blog title">
                        </div>

                        <!-- Blog Category -->
                        <div class="mb-4">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category" name="category" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="" disabled selected>Select a category</option>
                                <option value="Data Analytics" {{ old('category') == 'Data Analytics' ? 'selected' : '' }}>Data Analytics</option>
                                <option value="Data Engineer" {{ old('category') == 'Data Engineer' ? 'selected' : '' }}>Data Engineer</option>
                                <option value="Data Science" {{ old('category') == 'Data Science' ? 'selected' : '' }}>Data Science</option>
                                <option value="AI" {{ old('category') == 'AI' ? 'selected' : '' }}>AI</option>
                                <option value="Big Data" {{ old('category') == 'Big Data' ? 'selected' : '' }}>Big Data</option>
                                <option value="Machine Learning" {{ old('category') == 'Machine Learning' ? 'selected' : '' }}>Machine Learning</option>
                                <option value="NLP" {{ old('category') == 'NLP' ? 'selected' : '' }}>NLP</option>
                            </select>
                        </div>

                        <!-- Blog Thumbnail -->
                        <div class="mb-4">
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                            <input id="thumbnail" type="file" name="thumbnail"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Blog Content -->
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea id="content" name="content" rows="10" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write your blog content here..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                                Publish Blog
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>