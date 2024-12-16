<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <!-- Form Edit Produk -->
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Brand -->
        <div>
            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand" value="{{ $product->brand }}" required>
        </div>

        <!-- Model -->
        <div>
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="{{ $product->model }}" required>
        </div>

        <!-- Year -->
        <div>
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" value="{{ $product->year }}" required>
        </div>

        <!-- Price -->
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        </div>

        <!-- Description -->
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $product->description }}</textarea>
        </div>

        <!-- Contact -->
        <div>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" value="{{ $product->contact }}" required>
        </div>

        <!-- Current Image -->
        <div>
            <label>Current Image:</label>
            @if($product->images)
                <img src="{{ Storage::url('post/products/' . $product->images) }}" alt="{{ $product->model }}" width="200">
            @else
                <p>No image available.</p>
            @endif
        </div>

        <!-- Update Image -->
        <div>
            <label for="images">Update Image:</label>
            <input type="file" id="images" name="images" accept="image/*">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit">Update Product</button>
        </div>
    </form>
</body>
</html>
