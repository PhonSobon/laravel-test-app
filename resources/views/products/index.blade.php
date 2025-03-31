@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Product List</h2>

        <!-- Search and Filter Section -->
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Search a product">
        </div>

        <div class="table-responsive bg-white shadow rounded">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td class="text-center">
                                <!-- View Button -->
                                <a href="{{ route('products.show', $product->id) }}" class="text-orange-500 hover:text-orange-700 px-4 py-2 rounded-md font-semibold">View</a>

                                <!-- Edit Button -->
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>

                                <!-- Delete Button -->
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
    </div>
@endsection