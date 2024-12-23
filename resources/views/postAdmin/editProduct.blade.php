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
                        <label for="merek">Merek:</label>
                        <input type="text" class="form-control @error('merek') is-invalid @enderror" id="merek" name="merek" value="{{ $product->merek }}">
                        @error('merek')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Motor:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $product->nama  }}">
                        @error('nama')
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
                        <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="images">Foto Produk:</label>
                        <input type="file" class="form-control" id="images" name="images">
                        <img src="{{ asset('storage/' . $product->images) }}" alt="{{ $product->nama }}" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                    </div>
                    <div class="form-group">
                        <label for="image_path">Foto Detail Produk:</label>
                        <input type="file" class="form-control" id="image_path" name="image_path[]" multiple>
                        <div class="mt-2">  
                            @foreach ($images as $image)
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->nama }}" class="rounded" style="width: 100%; max-width: 100px; height: auto; margin-right: 10px;">
                            @endforeach
                        </div>
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar detail.</small>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
</x-layout>