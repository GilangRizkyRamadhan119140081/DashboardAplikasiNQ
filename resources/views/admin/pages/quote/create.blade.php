@extends('admin.layouts.index')

@section('title', 'Tambah Quote')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Quote Baru</h2>
        <form action="{{ route('quote.store') }}" method="POST">
            @csrf

            <!-- Quote -->
            <div class="mb-3">
                <label for="quote" class="form-label">Quote</label>
                <textarea class="form-control" id="quote" name="quote" placeholder="Masukkan Quote" required>{{ old('quote') }}</textarea>
            </div>

            <!-- From -->
            <div class="mb-3">
                <label for="from" class="form-label">From</label>
                <input type="text" class="form-control" id="from" name="from" placeholder="Masukkan Pengutip"
                    value="{{ old('from') }}">
            </div>

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Title"
                    value="{{ old('title') }}">
            </div>

            <!-- Image URL -->
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Masukkan URL gambar"
                    value="{{ old('image') }}">
            </div>

            <!-- User Update -->
            <div class="mb-3">
                <label for="user_update" class="form-label">User Update</label>
                <input type="number" class="form-control" id="user_update" name="user_update"
                    placeholder="Masukkan ID User Update" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan Quote</button>
        </form>
    </div>
@endsection
