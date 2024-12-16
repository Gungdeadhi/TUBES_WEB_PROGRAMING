<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-x1 text-gray-800 leadeing-tigh">
                {{ __('Edit Product') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hiden shadow-md sm:roundedlg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ route('products.update', $product->id )}}" 33 method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <x-input-label for="title">Brand</x-input-label>
                                <input type="text" name="brand" class="w-full form-input rounded-md shadow-sm @error('brand') border border-red-500 @enderror" placeholder="enter blog title" value="{{ old('brand') ?? $product->brand }}">
                                @error('brand')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <x-input-label for="title">Model</x-input-label>
                                <input type="text" name="model" class="w-full form-input rounded-md shadow-sm @error('model') border border-red-500 @enderror" placeholder="enter blog title" value="{{ old('model') ?? $product->model }}">
                                @error('model')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <x-input-label for="title">Tahun</x-input-label>
                                <input type="text" name="year" class="w-full form-input rounded-md shadow-sm @error('brand') border border-red-500 @enderror" placeholder="enter blog title" value="{{ old('year') ?? $product->year }}">
                                @error('year')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <x-input-label for="title">Harga</x-input-label>
                                <input type="text" name="price" class="w-full form-input rounded-md shadow-sm @error('price') border border-red-500 @enderror" placeholder="enter blog title" value="{{ old('price') ?? $product->price }}">
                                @error('price')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <x-input-label for="title">Image</x-input-label>
                                <input type="file" name="image" class="w-full form-input rounded-md shadow-sm @error('image') border border-red-500 @enderror">
                                @error('image')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <x-input-label for="title">Description</x-input-label>
                                <input type="text" name="description" class="w-full form-input rounded-md shadow-sm @error('description') border border-red-500 @enderror" placeholder="enter blog title" value="{{ old('description') ?? $product->description }}">
                                @error('description')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div>
                                <x-primary-button type="submit">Save</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>