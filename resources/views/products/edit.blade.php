<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
