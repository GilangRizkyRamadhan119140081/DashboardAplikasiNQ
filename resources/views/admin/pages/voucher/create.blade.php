@extends('admin.layouts.index')

@section('title', 'Create Voucher')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Voucher</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('voucher.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="voucher_code">Voucher Code</label>
                            <input type="text" name="voucher_code" id="voucher_code" class="form-control"
                                value="{{ old('voucher_code') }}" required>
                            @error('voucher_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="paket_id">Paket ID</label>
                            <select name="paket_id" id="paket_id" class="form-control" required>
                                <option value="" disabled selected>Select Paket</option>
                                @foreach ($paketOptions as $paket)
                                    <option value="{{ $paket->id_paket }}"
                                        {{ old('paket_id') == $paket->id_paket ? 'selected' : '' }}>
                                        {{ $paket->kode_paket }} ({{ $paket->harga }})
                                    </option>
                                @endforeach
                            </select>
                            @error('paket_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Voucher</button>
                        <a href="{{ route('voucher.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
