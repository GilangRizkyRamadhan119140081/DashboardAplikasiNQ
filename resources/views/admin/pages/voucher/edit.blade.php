@extends('admin.layouts.index')

@section('title', 'Edit Voucher')

@section('content')
    <div class="container mt-5">
        <h2>Edit Voucher</h2>
        <form action="{{ route('voucher.update', $voucher->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Voucher -->
            <div class="mb-3">
                <label for="voucher_id" class="form-label">Voucher ID</label>
                <input type="text" class="form-control" id="voucher_id" name="voucher_id"
                    value="{{ old('id', $voucher->quote) }}" required>
            </div>

            <!-- From -->
            <div class="mb-3">
                <label for="from" class="form-label">From</label>
                <input type="text" class="form-control" id="from" name="from"
                    value="{{ old('quote', $voucher->from) }}" required>
            </div>

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('from', $voucher->title) }}" required>
            </div>

            <!-- User Update -->
            <div class="mb-3">
                <label for="user_update" class="form-label">User Update</label>
                <input type="number" class="form-control" id="user_update" name="user_update"
                    value="{{ old('title', $voucher->user_update) }}" required>
            </div>

            <!-- Image URL -->
            <div class="mb-3">
                <label for="link" class="form-label">Image URL (Opsional)</label>
                <input type="url" class="form-control" id="link" name="link"
                    value="{{ old('image', $voucher->image) }}">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Update Quote</button>
        </form>
    </div>
@endsection
