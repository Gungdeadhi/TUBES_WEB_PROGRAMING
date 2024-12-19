<x-layout title="Product List" :breadcrumb="['Product','List Product']">
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <i class="fas fa-table me-1"></i>
                    Data Table
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Tahun</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $products as $product )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->brand }}</td>
                            <td>{{ $product->model }}</td>
                            <td>{{ $product->year }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product-> description }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $product->images )}}"
                                    alt="{{ $product->model }}" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                            </td>
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}">
                                    hapus
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Apakah anda yakin akan menghapus data {{$product->nama}}
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>                              
                                        </div>
                                    </div>
                                    </div>
                                </div>
                             </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>