@extends('admin.layouts.index')

@section('title', 'Edit Voucher')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Voucher</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('voucher.update', $voucher->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Menggunakan method PUT untuk update -->

                        <div class="form-group">
                            <label for="user_id">User ID</label>
                            <input type="number" name="user_id" id="user_id" class="form-control"
                                value="{{ old('user_id', $voucher->user_id) }}" required>
                            @error('user_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="user_used">User Used</label>
                            <input type="number" name="user_used" id="user_used" class="form-control"
                                value="{{ old('user_used', $voucher->user_used) }}">
                            @error('user_used')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="voucher_code">Voucher Code</label>
                            <input type="text" name="voucher_code" id="voucher_code" class="form-control"
                                value="{{ old('voucher_code', $voucher->voucher_code) }}" required>
                            @error('voucher_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="voucher_expire">Voucher Expiry Date</label>
                            <input type="date" name="voucher_expire" id="voucher_expire" class="form-control"
                                value="{{ old('voucher_expire', optional($voucher->voucher_expire)->format('Y-m-d')) }}">
                            @error('voucher_expire')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="paket_id">Paket ID</label>
                            <select name="paket_id" id="paket_id" class="form-control" required>
                                <option value="" disabled
                                    {{ old('paket_id', $voucher->paket_id) === null ? 'selected' : '' }}>
                                    Select Paket
                                </option>
                                @foreach ($paketOptions as $paket)
                                    <option value="{{ $paket->id_paket }}"
                                        {{ old('paket_id', $voucher->paket_id) == $paket->id_paket ? 'selected' : '' }}>
                                        {{ $paket->kode_paket }} ({{ $paket->harga }})
                                    </option>
                                @endforeach
                            </select>
                            @error('paket_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Voucher</button>
                        <a href="{{ route('voucher.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
