<x-layout title="Edit Product" :breadcrumb="['Product','Edit']">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{ $product->brand }}">
                        @error('brand')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="model">Model:</label>
                        <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ $product->model  }}">
                        @error('model')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="year">Tahun:</label>
                        <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{  $product->year }}">
                        @error('year')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Harga:</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <textarea class="form-control" id="description" name="description">{{ $product->id }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="images">Foto Produk:</label>
                        <input type="file" class="form-control" id="images" name="images">
                        <img src="{{ asset('storage/' . $product->images) }}" alt="{{ $product->model }}" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
</x-layout>