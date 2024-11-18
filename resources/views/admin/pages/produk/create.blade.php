@extends('admin.layouts.index')

@section('title', 'Tambah Produk')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Produk Baru</h2>

        <!-- Form Tambah Produk -->
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf

            <!-- Kode Produk -->
            <div class="mb-3">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode_produk" name="kode_produk"
                    placeholder="Masukkan kode produk" value="{{ old('kode_produk') }}" required>
                @error('kode_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori"
                    placeholder="Masukkan kategori produk" value="{{ old('kategori') }}" required>
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nama Produk -->
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                    placeholder="Masukkan nama produk" value="{{ old('nama_produk') }}" required>
                @error('nama_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Detail Produk -->
            <div class="mb-3">
                <label for="detail" class="form-label">Detail Produk</label>
                <textarea class="form-control" id="detail" name="detail" rows="4" placeholder="Masukkan detail produk"
                    required>{{ old('detail') }}</textarea>
                @error('detail')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga produk"
                    value="{{ old('harga') }}" required>
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Link (Opsional) -->
            <div class="mb-3">
                <label for="link" class="form-label">Link (Opsional)</label>
                <input type="url" class="form-control" id="link" name="link" placeholder="Masukkan link produk"
                    value="{{ old('link') }}">
                @error('link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- ID User -->
            <div class="mb-3">
                <label for="id_user" class="form-label">ID User</label>
                <input type="number" class="form-control" id="id_user" name="id_user"
                    placeholder="Masukkan ID User yang memiliki produk" value="{{ old('id_user') }}" required>
                @error('id_user')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Pemilik -->
            <div class="mb-3">
                <label for="pemilik" class="form-label">Pemilik Produk</label>
                <input type="text" class="form-control" id="pemilik" name="pemilik"
                    placeholder="Masukkan nama pemilik produk" value="{{ old('pemilik') }}" required>
                @error('pemilik')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gambar Produk (Opsional) -->
            <div class="mb-3">
                <label for="image" class="form-label">URL Gambar (Opsional)</label>
                <input type="text" class="form-control" id="image" name="image"
                    placeholder="Masukkan URL gambar produk" value="{{ old('image') }}">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Simpan Produk</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
