@extends('admin.layouts.index')

@section('title', 'Edit User')

@section('content')
    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}"
                    required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ old('email', $user->email) }}" required>
            </div>

            <!-- Tanggal Lahir -->
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <p><strong>Data Sebelumnya:</strong>
                    {{ $user->tanggal_lahir ? \Carbon\Carbon::parse($user->tanggal_lahir)->format('d/m/Y') : '-' }}</p>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir', $user->tanggal_lahir ? \Carbon\Carbon::parse($user->tanggal_lahir)->format('Y-m-d') : '') }}">
            </div>

            <!-- Referal Code -->
            <div class="mb-3">
                <label for="referal_code" class="form-label">Referal Code</label>
                <input type="text" class="form-control" id="referal_code" name="referal_code"
                    placeholder="Masukkan Referal Code (opsional)" value="{{ old('referal_code', $user->referal_code) }}">
            </div>

            <!-- Nomor HP -->
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp"
                    value="{{ old('nomor_hp', $user->nomor_hp) }}">
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat', $user->alamat) }}</textarea>
            </div>

            <!-- Kode Voucher -->
            <div class="mb-3">
                <label for="kode_voucher" class="form-label">Kode Voucher</label>
                <p><strong>Data Sebelumnya:</strong> {{ $user->kode_voucher ?? '-' }}</p>
                <input type="text" class="form-control" id="kode_voucher" name="kode_voucher"
                    value="{{ old('kode_voucher', $user->kode_voucher) }}">
            </div>

            <div class="mb-3">
                <label for="kode_paket" class="form-label">Kode Paket</label>
                <select class="form-select" id="kode_paket" name="kode_paket">
                    <option value="">-- Pilih Kode Paket (Opsional) --</option>
                    <option value="Free" {{ old('kode_paket', $user->kode_paket ?? '') == 'Free' ? 'selected' : '' }}>
                        Free
                    </option>
                    <option value="Gold-30"
                        {{ old('kode_paket', $user->kode_paket ?? '') == 'Gold-30' ? 'selected' : '' }}>
                        Gold-30</option>
                    <option value="Gold-365"
                        {{ old('kode_paket', $user->kode_paket ?? '') == 'Gold-365' ? 'selected' : '' }}>Gold-365</option>
                    <option value="Platinum-30"
                        {{ old('kode_paket', $user->kode_paket ?? '') == 'Platinum-30' ? 'selected' : '' }}>Platinum-30
                    </option>
                    <option value="Platinum-365"
                        {{ old('kode_paket', $user->kode_paket ?? '') == 'Platinum-365' ? 'selected' : '' }}>Platinum-365
                    </option>
                </select>
            </div>

            <!-- Role ID -->
            <div class="mb-3">
                <label for="role_id" class="form-label">Role</label>
                <select class="form-select" id="role_id" name="role_id">
                    <option value="">-- Pilih Role --</option>
                    <option value="1" {{ old('role_id', $user->role_id) == 1 ? 'selected' : '' }}>User</option>
                    <option value="2" {{ old('role_id', $user->role_id) == 2 ? 'selected' : '' }}>User Seller</option>
                    <option value="3" {{ old('role_id', $user->role_id) == 3 ? 'selected' : '' }}>Admin</option>
                    <option value="4" {{ old('role_id', $user->role_id) == 4 ? 'selected' : '' }}>Superadmin</option>
                </select>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
