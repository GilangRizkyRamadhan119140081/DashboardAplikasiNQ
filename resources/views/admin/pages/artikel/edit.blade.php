@extends('admin.layouts.index')

@section('title', 'Edit Article')

@section('content')
    <div class="container mt-5">
        <h2>Edit Article</h2>

        <!-- Menampilkan pesan sukses atau error -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form untuk mengedit artikel -->
        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data"
            onsubmit="showModal(event)">
            @csrf
            @method('PUT')

            <!-- Judul Artikel -->
            <div class="mb-3">
                <label for="judul" class="form-label">Article Title</label>
                <input type="text" class="form-control" id="judul" name="judul"
                    value="{{ old('judul', $artikel->judul) }}" required>
            </div>

            <!-- Isi Artikel -->
            <div class="mb-3">
                <label for="isi" class="form-label">Content</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ old('isi', $artikel->isi) }}</textarea>
            </div>

            <!-- Author (ID User) -->
            <div class="mb-3">
                <label for="id_user" class="form-label">Author</label>
                <select class="form-select" id="id_user" name="id_user" required>
                    <option value="">-- Select Author --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            {{ old('id_user', $artikel->id_user) == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image (Optional)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if ($artikel->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="Current Image" width="100">
                        <p>Current Image</p>
                    </div>
                @endif
            </div>

            <!-- Link (Optional) -->
            <div class="mb-3">
                <label for="link" class="form-label">External Link (Optional)</label>
                <input type="url" class="form-control" id="link" name="link"
                    value="{{ old('link', $artikel->link) }}">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>

    <!-- Alert Modal -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to update this article?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmSubmit">Yes, Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function showModal(event) {
            event.preventDefault();
            var myModal = new bootstrap.Modal(document.getElementById('alertModal'));
            myModal.show();

            document.getElementById('confirmSubmit').onclick = function() {
                event.target.submit();
            };
        }
    </script>
@endsection
