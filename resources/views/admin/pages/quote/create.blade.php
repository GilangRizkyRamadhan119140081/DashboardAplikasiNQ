@extends('admin.layouts.index')

@section('title', 'Tambah Quote')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Quote Baru</h2>
        <form action="{{ route('quote.store') }}" method="POST">
            @csrf

            <!-- Role ID -->
            <div class="mb-3">
                <label for="quote_id" class="form-label">Quote ID</label>
                <input type="number" class="form-control" id="quote_id" name="quote_id" placeholder="Masukkan Role ID">
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label for="quote" class="form-label">Quote</label>
                <input type="text" class="form-control" id="quote" name="quote" placeholder="Masukkan Quote"
                    required>
            </div>

            <!-- From -->
            <div class="mb-3">
                <label for="from" class="form-label">From</label>
                <input type="text" class="form-control" id="from" name="from" placeholder="Masukkan Pengutip"
                    required>
            </div>

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Title"
                    required>
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Masukkan URL gambar">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan Quote</button>
        </form>
    </div>
@endsection
