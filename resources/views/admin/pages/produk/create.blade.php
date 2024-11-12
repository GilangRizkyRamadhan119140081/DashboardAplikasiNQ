@extends('admin.layouts.index')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="bg-white p-3 rounded shadow-sm mb-4" style="margin-top: 20px;">
        <h1 class="my-0">Tambah Produk Baru</h1>
    </div>

    <!-- Form -->
    <div class="bg-white p-3 rounded shadow-sm">
        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <!-- Kode Produk -->
                    <div class="mb-3">
                        <label for="kode_produk" class="form-label">Kode Produk</label>
                        <input type="text" class="form-control @error('kode_produk') is-invalid @enderror" 
                               id="kode_produk" name="kode_produk" value="{{ old('kode_produk') }}" required>
                        @error('kode_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kategori -->
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select @error('kategori') is-invalid @enderror" 
                                id="kategori" name="kategori" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Pakaian">Pakaian</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama Produk -->
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" 
                               id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}" required>
                        @error('nama_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Detail -->
                    <div class="mb-3">
                        <label for="detail" class="form-label">Detail Produk</label>
                        <textarea class="form-control @error('detail') is-invalid @enderror" 
                                  id="detail" name="detail" rows="3">{{ old('detail') }}</textarea>
                        @error('detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" 
                                   id="harga" name="harga" value="{{ old('harga') }}" required>
                        </div>
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Pemilik -->
                    <div class="mb-3">
                        <label for="pemilik" class="form-label">Pemilik</label>
                        <input type="text" class="form-control @error('pemilik') is-invalid @enderror" 
                               id="pemilik" name="pemilik" value="{{ old('pemilik') }}" required>
                        @error('pemilik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Gambar -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Tombol Submit dan Kembali -->
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Simpan Produk
                </button>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary ms-2">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection