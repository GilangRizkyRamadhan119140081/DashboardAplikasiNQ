@extends('admin.layouts.index')

@section('title', 'Create Payment')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3">Create Payment</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('payment.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('payment.store') }}">
                    @csrf

                    <!-- Order ID -->
                    <div class="mb-3">
                        <label for="order_id" class="form-label">Order ID</label>
                        <input type="text" name="order_id" id="order_id" class="form-control"
                            value="{{ old('order_id') }}" required>
                        @error('order_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- User ID -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="number" name="user_id" id="user_id" class="form-control"
                            value="{{ old('user_id') }}" required>
                        @error('user_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed
                            </option>
                            <option value="Failed" {{ old('status') == 'Failed' ? 'selected' : '' }}>Failed</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Quantity -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control"
                            value="{{ old('quantity') }}" required>
                        @error('quantity')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control"
                            value="{{ old('price') }}" required>
                        @error('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Item Name -->
                    <div class="mb-3">
                        <label for="item_name" class="form-label">Item Name</label>
                        <input type="text" name="item_name" id="item_name" class="form-control"
                            value="{{ old('item_name') }}" required>
                        @error('item_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Customer Email -->
                    <div class="mb-3">
                        <label for="customer_email" class="form-label">Customer Email</label>
                        <input type="email" name="customer_email" id="customer_email" class="form-control"
                            value="{{ old('customer_email') }}" required>
                        @error('customer_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Create Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
