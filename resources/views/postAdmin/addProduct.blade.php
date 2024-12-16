<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Add Product') }} 
        </h2> 
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg"> 
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <!-- Brand -->
                        <div class="mb-2">
                            <x-input-label for="brand" class="text-black">Brand</x-input-label> 
                            <input type="text" name="brand" id="brand" class="w-full form-input rounded-md shadow-sm @error('brand') border border-red-500 @enderror" placeholder="Enter brand" value="{{ old('brand') }}">
                            @error('brand')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror 
                        </div>

                        <!-- Model -->
                        <div class="mb-2">
                            <x-input-label for="model">Model</x-input-label> 
                            <input type="text" name="model" id="model" class="form-input rounded-md shadow-sm w-full @error('model') border border-red-500 @enderror" placeholder="Enter model" value="{{ old('model') }}">
                            @error('model')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tahun -->
                        <div class="mb-2">
                            <x-input-label for="year">Tahun</x-input-label> 
                            <input type="text" name="year" id="year" class="form-input rounded-md shadow-sm w-full @error('year') border border-red-500 @enderror" placeholder="Enter tahun" value="{{ old('year') }}">
                            @error('year')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="mb-2">
                            <x-input-label for="price">Harga</x-input-label> 
                            <input type="text" name="price" id="price" class="form-input rounded-md shadow-sm w-full @error('price') border border-red-500 @enderror" placeholder="Enter harga" value="{{ old('price') }}">
                            @error('price')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-2">
                            <x-input-label for="images">Image</x-input-label> 
                            <input type="file" name="images" id="images" class="w-full form-input rounded-md shadow-sm @error('image') border border-red-500 @enderror"> 
                            @error('images')
                                <span class="text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-2">
                            <x-input-label for="description">Description</x-input-label> 
                            <textarea name="description" id="description" rows="4" class="form-input rounded-md shadow-sm w-full @error('description') border border-red-500 @enderror" placeholder="Enter product description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <x-primary-button type="submit">Save</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
