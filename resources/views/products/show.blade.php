<!-- @extends('layout')

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
@endsection -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Product</title>
  <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 p-10">

  <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold mb-6 text-center">View Product</h1>
    
    <table class="w-full border-collapse border border-gray-300">
      <thead>
        <tr>
          <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Product Name</th>
          <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Description</th>
          <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="px-6 py-4 border-b">{{ $product->name }}</td>
          <td class="px-6 py-4 border-b">{{ $product->description }}</td>
          <td class="px-6 py-4 border-b">${{ $product->price }}</td>
        </tr>
      </tbody>
    </table>

    <div class="mt-6 text-center">
      <a href="{{ route('products.index') }}" class="inline-block bg-blue-500 text-white p-3 rounded-md font-semibold hover:bg-blue-600">Back to List</a>
    </div>
  </div>

</body>
</html>

