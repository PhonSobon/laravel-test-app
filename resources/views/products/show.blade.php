@extends('layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Product Details</h2>

        <div class="bg-white shadow-lg rounded-lg p-8">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h3>
            <p class="text-gray-600 mb-4">{{ $product->description }}</p>
            <p class="text-xl font-semibold text-gray-800">${{ number_format($product->price, 2) }}</p>

            <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-md mt-4 inline-block">
                Back to Product List
            </a>
        </div>
    </div>
@endsection
