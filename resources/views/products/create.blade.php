@extends('layout')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-lg mt-10">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Create New Product</h2>
        
        <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="flex flex-col">
                <label for="name" class="text-lg font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Product Name" required 
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
            </div>

            <div class="flex flex-col">
                <label for="description" class="text-lg font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" placeholder="Enter product description..." 
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"></textarea>
            </div>

            <div class="flex flex-col">
                <label for="price" class="text-lg font-medium text-gray-700">Price</label>
                <input type="number" step="0.01" name="price" id="price" placeholder="Enter Price" required 
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md text-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
