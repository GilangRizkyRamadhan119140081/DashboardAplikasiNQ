@extends('admin.layouts.index')

@section('content')
    <div class="container mt-5">
        <h2>Tambah User Baru</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- Role ID -->
            <div class="mb-3">
                <label for="role_id" class="form-label">Role</label>
                <select class="form-select" id="role_id" name="role_id" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="1" {{ old('role_id', $user->role_id ?? '') == 1 ? 'selected' : '' }}>User</option>
                    <option value="2" {{ old('role_id', $user->role_id ?? '') == 2 ? 'selected' : '' }}>User Seller
                    </option>
                    <option value="3" {{ old('role_id', $user->role_id ?? '') == 3 ? 'selected' : '' }}>Admin</option>
                    <option value="4" {{ old('role_id', $user->role_id ?? '') == 4 ? 'selected' : '' }}>Superadmin
                    </option>
                </select>
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama"
                    required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email"
                    required>
            </div>

            <!-- Password -->
            {{-- <div class="mb-3">
                <label for="password" class="form-label">Password</label>
               
            </div> --}}
            <input type="hidden" class="form-control" id="password" name="password"
                value="$2y$12$DIPkSswPdHMujHqyuXqT1OFwFqzuALSYinIxww3d5/C43jLpndXxK" placeholder="Masukkan password"
                required>
            {{-- <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Ulangi password" required>
            </div> --}}

            <!-- Checkbox Show Password -->
            {{-- <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="showPassword" onclick="togglePassword()">
                <label class="form-check-label" for="showPassword">Tampilkan Password</label>
            </div> --}}

            <!-- Tanggal Lahir -->
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>

            <!-- Nomor HP -->
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan nomor HP">
            </div>

            <!-- Alamat -->
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
            </div>

            <!-- Referal Code -->
            <div class="mb-3">
                <label for="referal_code" class="form-label">Referal Code</label>
                <input type="text" class="form-control" id="referal_code" name="referal_code"
                    placeholder="Masukkan Referal Code (opsional)">
            </div>

            <!-- Kode Paket -->
            <div class="mb-3">
                <label for="kode_paket" class="form-label">Kode Paket</label>
                <select class="form-select" id="kode_paket" name="kode_paket">
                    <option value="">-- Pilih Kode Paket (Opsional) --</option>
                    <option value="Free" {{ old('kode_paket', $user->kode_paket ?? '') == 'Free' ? 'selected' : '' }}>
                        Free
                    </option>
                    <option value="Gold-30" {{ old('kode_paket', $user->kode_paket ?? '') == 'Gold-30' ? 'selected' : '' }}>
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

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan User</button>
        </form>
    </div>

    <!-- Modal Bootstrap -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Informasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="alertMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Modal -->
    <script>
        // function togglePassword() {
        //     const passwordField = document.getElementById("password");
        //     const confirmPasswordField = document.getElementById("password_confirmation");

        //     // Toggle the type attribute
        //     const type = passwordField.type === "password" ? "text" : "password";
        //     passwordField.type = type;
        //     confirmPasswordField.type = type;
        // }

        document.addEventListener("DOMContentLoaded", function() {
            // Menampilkan modal saat ada session success atau error
            @if (session('success'))
                showModal('{{ session('success') }}');
            @elseif ($errors->any())
                let errorMessage = '';
                @foreach ($errors->all() as $error)
                    errorMessage += '{{ $error }}<br>';
                @endforeach
                showModal(errorMessage);
            @endif

            // Fungsi untuk menampilkan modal
            function showModal(message) {
                const alertModal = new bootstrap.Modal(document.getElementById('alertModal'));
                document.getElementById('alertMessage').innerHTML = message;
                alertModal.show();
            }
        });
    </script>
@endsection
