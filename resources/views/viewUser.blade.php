<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
        <div class="product-item">
            <h3>{{ $product->brand }} - {{ $product->model }} ({{ $product->year }})</h3>
            <p>Price: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p>{{ $product->description }}</p>
            <p>Contact: {{ $product->contact }}</p>
            <p></p>
            <img src="{{ asset('storage/' . $product->images) }}" alt="{{ $product->model }}" width="200">
        </div>
    @endforeach    
</body>
</html>
