@extends('admin.layouts.index')

@section('title', 'Update Status Payment')

@section('content')
    <div class="container">
        <h1 class="h3 mb-4">Update Status Payment</h1>

        <form action="{{ route('payment.updateStatus', $payment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option value="settlement" {{ $payment->status == 'settlement' ? 'selected' : '' }}>Settlement</option>
                    <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="expire" {{ $payment->status == 'expire' ? 'selected' : '' }}>Expire</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Status</button>
            <a href="{{ route('payment.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
