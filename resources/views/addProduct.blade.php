<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="brand">Brand:</label>
    <input type="text" name="brand" required><br>

    <label for="model">Model:</label>
    <input type="text" name="model" required><br>

    <label for="year">Year:</label>
    <input type="number" name="year" required><br>

    <label for="price">Price:</label>
    <input type="number" name="price" required><br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br>

    <label for="contact">Contact:</label>
    <input type="text" name="contact" required><br>

    <label for="images">Images:</label>
    <input type="file" name="images" accept="image/*" required><br>

    <button type="submit">Add Product</button>
</form>
