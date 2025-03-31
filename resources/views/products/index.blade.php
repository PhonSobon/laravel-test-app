<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
  <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 p-10">

  <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold">Product List</h1>
      <a href="{{ route('products.create') }}" class="inline-block bg-blue-500 text-white p-3 rounded-md font-semibold hover:bg-blue-600">Create New Product</a>
    </div>
    
    <table class="w-full border-collapse border border-gray-300">
      <thead>
        <tr>
          <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Product Name</th>
          <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Description</th>
          <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Price</th>
          <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td class="px-6 py-4 border-b">{{ $product->name }}</td>
          <td class="px-6 py-4 border-b">{{ $product->description }}</td>
          <td class="px-6 py-4 border-b">${{ $product->price }}</td>
          <td class="px-6 py-4 border-b flex gap-4">
            <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
            <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:text-yellow-700">Edit</a>
            
            <!-- Corrected Delete Form -->
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-6 flex justify-between items-center">
      {{ $products->links() }}
    </div>
  </div>

</body>
</html>
