@extends('admin.layouts.index')

@section('title', 'Create Paket')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Paket Baru</h2>
        <form action="{{ route('paket.store') }}" method="POST">
            @csrf

            <!-- Role ID -->
            <div class="mb-3">
                <label for="paket_id" class="form-label">Paket ID</label>
                <input type="number" class="form-control" id="paket_id" name="paket_id" placeholder="Masukkan Paket ID">
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label for="paket_name" class="form-label">Nama Paket</label>
                <input type="text" class="form-control" id="paket_name" name="paket_name" placeholder="Masukkan Nama Paket"
                    required>
            </div>

            {{-- <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email"
                    required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password"
                    required>
            </div> --}}

            {{-- <!-- Konfirmasi Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Ulangi password" required>
            </div> --}}

            {{-- <!-- Tanggal Lahir -->
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>

            <!-- Nomor HP -->
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan nomor HP">
            </div> --}}

            {{-- <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat"></textarea>
            </div>

            <!-- Google ID -->
            <div class="mb-3">
                <label for="google_id" class="form-label">Google ID</label>
                <input type="text" class="form-control" id="google_id" name="google_id"
                    placeholder="Masukkan Google ID (opsional)">
            </div>

            <!-- Referal ID -->
            <div class="mb-3">
                <label for="referal_id" class="form-label">Referal ID</label>
                <input type="number" class="form-control" id="referal_id" name="referal_id"
                    placeholder="Masukkan Referal ID (opsional)">
            </div> --}}

            {{-- <!-- Referal Code -->
            <div class="mb-3">
                <label for="referal_code" class="form-label">Referal Code</label>
                <input type="text" class="form-control" id="referal_code" name="referal_code"
                    placeholder="Masukkan Referal Code (opsional)">
            </div>

            <!-- Referal From -->
            <div class="mb-3">
                <label for="referal_from" class="form-label">Referal From</label>
                <input type="text" class="form-control" id="referal_from" name="referal_from"
                    placeholder="Masukkan Referal From (opsional)">
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image"
                    placeholder="Masukkan URL gambar (opsional)">
            </div>

            <!-- Kode Voucher -->
            <div class="mb-3">
                <label for="kode_voucher" class="form-label">Kode Voucher</label>
                <input type="text" class="form-control" id="kode_voucher" name="kode_voucher"
                    placeholder="Masukkan Kode Voucher (opsional)">
            </div> --}}

            <!-- Kode Paket -->
            <div class="mb-3">
                <label for="kode_paket" class="form-label">Kode Paket</label>
                <input type="text" class="form-control" id="kode_paket" name="kode_paket"
                    placeholder="Masukkan Kode Paket">
            </div>

            <!-- Tanggal Expired -->
            <div class="mb-3">
                <label for="expired" class="form-label">Tanggal Expired</label>
                <input type="date" class="form-control" id="expired" name="expired">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan Paket</button>
        </form>
    </div>
@endsection