@extends('admin.layouts.index')

@section('title', 'Create Voucher')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Voucher Baru</h2>
        <form action="{{ route('voucher.store') }}" method="POST">
            @csrf

            <!-- Role ID -->
            <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="number" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID"
                    required>
            </div>

            <!-- Kode Voucher-->
            <div class="mb-3">
                <label for="voucher_code" class="form-label">Kode Voucher</label>
                <input type="text" class="form-control" id="voucher_code" name="voucher_code" placeholder="Masukkan Kode Voucher"
                    required>
            </div> 

            <!-- Expire Voucher-->
            <div class="mb-3">
                <label for="voucher_expire" class="form-label">Voucher Expire Date</label>
                <input type="date" class="form-control" id="voucher_expire" name="voucher_expire" placeholder="Masukkan Tanggal Expire Voucher"
                    required>
            </div> 
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan Voucher</button>
        </form>
    </div>
@endsection
