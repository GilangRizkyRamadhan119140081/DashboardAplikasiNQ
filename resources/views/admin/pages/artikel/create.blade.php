@extends('admin.layouts.index')

@section('title', 'Create Article')

@section('content')
    <div class="container mt-5">
        <h2>Create New Article</h2>

        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data" onsubmit="showModal(event)">
            @csrf

            <!-- Judul Artikel -->
            <div class="mb-3">
                <label for="judul" class="form-label">Article Title</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required>
            </div>

            <!-- Isi Artikel -->
            <div class="mb-3">
                <label for="isi" class="form-label">Content</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ old('isi') }}</textarea>
            </div>

            <!-- Author (ID artikel) -->
            <div class="mb-3">
                <label for="id_artikel" class="form-label">Author</label>
                <select class="form-select" id="id_artikel" name="id_artikel" required>
                    <option value="">-- Select Author --</option>
                    {{-- @foreach ($artikels as $artikel)
                        <option value="{{ $artikel->id }}" {{ old('id_artikel') == $artikel->id ? 'selected' : '' }}>
                            {{ $artikel->name }}
                        </option>
                    @endforeach --}}
                </select>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="link" class="form-label">Image Link</label>
                <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}">
            </div>

            <!-- Link (Optional) -->
            <div class="mb-3">
                <label for="link" class="form-label">External Link</label>
                <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Save Article</button>
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
                    Are you sure you want to save this article?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmSubmit">Yes, Save</button>
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

            // Handle the modal "Yes" button click to submit the form
            document.getElementById('confirmSubmit').onclick = function() {
                event.target.submit();
            };
        }
    </script>
@endsection
