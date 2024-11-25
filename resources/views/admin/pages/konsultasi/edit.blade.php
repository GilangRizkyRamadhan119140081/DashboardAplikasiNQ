@extends('admin.layouts.index')

@section('title', 'Edit Konsultasi')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Konsultasi</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('konsultasi.update', $konsultasi->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                        <div class="form-group">
                            <label for="user_id">User ID</label>
                            <input type="number" name="user_id" id="user_id" class="form-control"
                                value="{{ old('user_id', $konsultasi->user_id) }}" required>
                            @error('user_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="judul_konsultasi">Judul Konsultasi</label>
                            <input type="text" name="judul_konsultasi" id="judul_konsultasi" class="form-control"
                                value="{{ old('judul_konsultasi', $konsultasi->judul_konsultasi) }}" required>
                            @error('judul_konsultasi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi_konsultasi">Deskripsi Konsultasi</label>
                            <textarea name="deskripsi_konsultasi" id="deskripsi_konsultasi" rows="5" class="form-control" required>{{ old('deskripsi_konsultasi', $konsultasi->deskripsi_konsultasi) }}</textarea>
                            @error('deskripsi_konsultasi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_konsultasi">Tanggal Konsultasi</label>
                            <input type="date" name="tanggal_konsultasi" id="tanggal_konsultasi" class="form-control"
                                value="{{ old('tanggal_konsultasi', optional($konsultasi->tanggal_konsultasi)->format('Y-m-d')) }}">
                            @error('tanggal_konsultasi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Konsultasi</button>
                        <a href="{{ route('konsultasi.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
