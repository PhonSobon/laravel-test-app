<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Product</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-6 text-center">Create New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="productName" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" id="productName" name="name" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter product name" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter product description" required></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" id="price" name="price" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter product price" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md font-semibold hover:bg-blue-600">Save</button>
        </form>
    </div>

</body>
</html>
