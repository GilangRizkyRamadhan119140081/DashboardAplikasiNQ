@extends('admin.layouts.index')

@section('title', 'Payment List')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3">Payment List</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <!-- Search Form -->
                <form method="GET" action="{{ route('payment.index') }}" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control"
                            placeholder="Search by Order ID, Status, or Email" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <!-- Button Toggle: "Lihat Semua Data" / "Tutup" -->
                <form method="GET" action="{{ route('payment.index') }}" class="mb-4">
                    <input type="hidden" name="view_all" value="{{ request('view_all') == 1 ? 0 : 1 }}">
                    <button type="submit" class="btn btn-success">
                        {{ request('view_all') == 1 ? 'Tutup' : 'Lihat Semua Data' }}
                    </button>
                </form>
                <div>
                    <strong>Total Price:</strong> Rp. {{ number_format($totalPrice, 0, ',', '.') }}
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Status</th>
                                <th>Update Status</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Item ID</th>
                                <th>Item Name</th>
                                <th>Customer First Name</th>
                                <th>Customer Email</th>
                                <th>Checkout Link</th>
                                <th>Type Payment</th>
                                <th>Type Payment Detail</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalPrice = 0;
                            @endphp
                            @forelse ($payments as $payment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $payment->order_id }}</td>
                                    <td>{{ $payment->user_id }}</td>
                                    <td>{{ $payment->status }}</td>
                                    <td>
                                        <a href="{{ route('payment.editStatus', $payment->id) }}"
                                            class="btn btn-sm btn-primary">Update Status</a>
                                    </td>
                                    <td>{{ $payment->quantity }}</td>
                                    <td>{{ number_format($payment->price, 2) }}</td>
                                    <td>{{ $payment->item_id }}</td>
                                    <td>{{ $payment->item_name }}</td>
                                    <td>{{ $payment->customer_first_name }}</td>
                                    <td>{{ $payment->customer_email }}</td>
                                    <td><a href="{{ $payment->checkout_link }}" target="_blank">Checkout</a></td>
                                    <td>{{ $payment->type_payment }}</td>
                                    <td>{{ $payment->type_payment_detail }}</td>
                                    <td>
                                        @if ($payment->image)
                                            <img src="{{ asset('storage/' . $payment->image) }}" alt="Payment Image"
                                                style="width: 50px; height: auto;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $payment->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $payment->updated_at->format('Y-m-d H:i:s') }}</td>
                                    <td>
                                        <a href="{{ route('payment.edit', $payment->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('payment.destroy', $payment->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                @php
                                    // Tambahkan harga transaksi ke totalPrice
                                    $totalPrice += $payment->price;
                                @endphp
                            @empty
                                <tr>
                                    <td colspan="18" class="text-center">No payments found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Total Price -->
                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <strong>Total Price:</strong> Rp. {{ number_format($totalPrice, 0, ',', '.') }}
                    </div>
                    <!-- Pagination -->
                    @if (!$viewAll)
                        <div>
                            {{ $payments->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
