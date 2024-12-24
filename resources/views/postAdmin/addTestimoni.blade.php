<x-layout title="Create Testi" :breadcrumb="['Testi','Create']">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tambah data
            </div>
            <div class="card-body">
                <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image_testi">Tambahkan Foto Testimoni:</label>
                        <input type="file" name="image_testi[]" id="image_testi" class="form-control" multiple required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
</x-layout>