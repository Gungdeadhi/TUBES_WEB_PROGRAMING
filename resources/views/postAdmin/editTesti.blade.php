<x-layout title="Edit Testimoni" :breadcrumb="['Testimoni','Edit']">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="image_testi">Ganti Foto:</label>
                        <input type="file" class="form-control" id="image_testi" name="image_testi">
                        <img src="{{ asset('storage/' . $testimoni->image_testi) }}" alt="{{ $testimoni->id }}" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
</x-layout>