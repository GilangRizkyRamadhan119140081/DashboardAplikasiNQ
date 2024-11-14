@extends('admin.layouts.index')

@section('title', 'Edit Paket')

@section('content')
    <div class="container mt-5">
        <h2>Edit Paket</h2>
        <form action="{{ route('paket.update', $paket->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- ID Paket -->
            <div class="mb-3">
                <label for="id_paket" class="form-label">ID Paket</label>
                <input type="number" class="form-control" id="id_paket" name="id_paket"
                    value="{{ old('id_paket', $paket->id_paket) }}" required>
            </div>

            <!-- Kode Paket -->
            <div class="mb-3">
                <label for="kode_paket" class="form-label">Kode Paket</label>
                <input type="text" class="form-control" id="kode_paket" name="kode_paket"
                    value="{{ old('kode_paket', $paket->kode_paket) }}" required>
            </div>

            <!-- Hari -->
            <div class="mb-3">
                <label for="hari" class="form-label">Hari</label>
                <input type="number" class="form-control" id="hari" name="hari"
                    value="{{ old('hari', $paket->hari) }}" required>
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga"
                    value="{{ old('harga', $paket->harga) }}" required>
            </div>

            <!-- Link (Opsional) -->
            <div class="mb-3">
                <label for="link" class="form-label">Link (Opsional)</label>
                <input type="url" class="form-control" id="link" name="link"
                    value="{{ old('link', $paket->link) }}">
            </div>

            <!-- Deskripsi -->
            @for ($i = 1; $i <= 7; $i++)
                <div class="mb-3">
                    <label for="deskripsi{{ $i }}" class="form-label">Deskripsi {{ $i }}</label>
                    <textarea class="form-control" id="deskripsi{{ $i }}" name="deskripsi{{ $i }}">{{ old("deskripsi{$i}", $paket->{'deskripsi' . $i}) }}</textarea>
                </div>
            @endfor

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Update Paket</button>
        </form>
    </div>
@endsection
