<x-app-layout> 
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Post') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('products.create') }}" class="inline-flex itemscenter px-4 py-2 bg-gray-800 border border-transparent rounded-md fontsemibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 mb-4">
                Create Post
            </a>
            <div class="bg-white overflow-hidden shadow-md sm:roundedlg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block minw-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>

                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-700 uppercase tracking-wider bg-gray-100">
                                                Brand
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-700 uppercase tracking-wider bg-gray-100">
                                                Model
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-700 uppercase tracking-wider">
                                                Tahun
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-700 uppercase tracking-wider">
                                                Harga
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-700 uppercase tracking-wider">
                                                Deskirpsi
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-700 uppercase tracking-wider">
                                                Contact
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-700 uppercase tracking-wider">
                                                Foto
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sronly">Edit</span>
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($products as $product)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex itemscenter">
                                                    <div class="ml-4">
                                                        <div class="textsm font-medium text-gray-900">{{ $product->brand }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $product->model }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $product->year }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $product->description }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Contact</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <img src="{{ asset('storage/' . $product->images) }}" alt="{{ $product->model }}" class="h-16 w-16">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('products.edit', $product->id) }}" alt="{{ $product->model }}" class="text-indigo-600 hover:text-indigo-900" enctype="multipart/form-data">
                                                    Edit
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-indigo-600 hover:text-indigo-900" onclick="return confirm('Are you sure delete this data?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>