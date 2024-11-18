@extends('admin.layouts.index')

@section('title', 'Edit Produk')

@section('content')
    <div class="container mt-5">
        <h2>Edit Produk</h2>

        {{-- Menampilkan pesan sukses/error --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form Edit Produk --}}
        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Kode Produk -->
            <div class="mb-3">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode_produk" name="kode_produk"
                    value="{{ old('kode_produk', $produk->kode_produk) }}" required>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori"
                    value="{{ old('kategori', $produk->kategori) }}" required>
            </div>

            <!-- Nama Produk -->
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                    value="{{ old('nama_produk', $produk->nama_produk) }}" required>
            </div>

            <!-- Detail -->
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <textarea class="form-control" id="detail" name="detail" rows="3" required>{{ old('detail', $produk->detail) }}</textarea>
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga"
                    value="{{ old('harga', $produk->harga) }}" required>
            </div>

            <!-- Link -->
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" id="link" name="link"
                    value="{{ old('link', $produk->link) }}">
            </div>

            <!-- ID User (Pemilik) -->
            <div class="mb-3">
                <label for="id_user" class="form-label">ID User (Pemilik)</label>
                <input type="number" class="form-control" id="id_user" name="id_user"
                    value="{{ old('id_user', $produk->id_user) }}" required>
            </div>

            <!-- Nama Pemilik -->
            <div class="mb-3">
                <label for="pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" id="pemilik" name="pemilik"
                    value="{{ old('pemilik', $produk->pemilik) }}" required>
            </div>

            <!-- Image URL -->
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image"
                    value="{{ old('image', $produk->image) }}">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
    </div>
@endsection
