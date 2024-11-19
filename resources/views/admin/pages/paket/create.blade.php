@extends('admin.layouts.index')

@section('title', 'Paket Create')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Paket Baru</h2>

        <form action="{{ route('paket.store') }}" method="POST" onsubmit="showModal(event)">
            @csrf

            <!-- ID Paket -->
            <div class="mb-3">
                <label for="id_paket" class="form-label">ID Paket</label>
                <select class="form-select" id="id_paket" name="id_paket" required>
                    <option value="">-- Pilih Paket --</option>
                    <option value="1" {{ old('id_paket', $paket->id_paket ?? '') == 1 ? 'selected' : '' }}>Free
                    </option>
                    <option value="2" {{ old('id_paket', $paket->id_paket ?? '') == 2 ? 'selected' : '' }}>Gold
                    </option>
                    <option value="3" {{ old('id_paket', $paket->id_paket ?? '') == 3 ? 'selected' : '' }}>Platinum
                    </option>
                </select>
            </div>

            <!-- Kode Paket -->
            <div class="mb-3">
                <label for="kode_paket" class="form-label">Kode Paket</label>
                <input type="text" class="form-control" id="kode_paket" name="kode_paket" value="{{ old('kode_paket') }}"
                    required>
            </div>

            <!-- Hari -->
            <div class="mb-3">
                <label for="hari" class="form-label">Hari</label>
                <input type="number" class="form-control" id="hari" name="hari" value="{{ old('hari') }}"
                    required>
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}"
                    required>
            </div>

            <!-- Link -->
            <div class="mb-3">
                <label for="link" class="form-label">Link (Opsional)</label>
                <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Simpan Paket</button>
        </form>
    </div>

    <!-- Alert Modal -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menyimpan paket ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="confirmSubmit">Ya, Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function showModal(event) {
            event.preventDefault();
            var myModal = new bootstrap.Modal(document.getElementById('alertModal'));
            myModal.show();

            // Handle the modal "Yes" button click to submit the form
            document.getElementById('confirmSubmit').onclick = function() {
                event.target.submit();
            };
        }
    </script>
@endsection
