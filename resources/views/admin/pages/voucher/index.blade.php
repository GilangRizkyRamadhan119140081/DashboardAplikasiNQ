@extends('admin.layouts.index')

@section('title', 'Voucher Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Voucher List</h4>
                    <form action="{{ route('voucher.index') }}" method="GET">
                        <div class="input-group search-area">
                            <input type="text" name="search" class="form-control" placeholder="Search here..."
                                value="{{ request('search') }}">
                            <span class="input-group-text">
                                <button type="submit" style="border: none; background: none;">
                                    <i class="flaticon-381-search-2"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Voucher Code</th>
                                    <th>Paket ID</th> <!-- Kolom baru untuk Paket ID -->
                                    <th>User ID</th>
                                    <th>User Used</th>
                                    <th>Voucher Expire</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vouchers as $voucher)
                                    <tr>
                                        <td>{{ $voucher->id }}</td>
                                        <td>{{ $voucher->voucher_code }}</td>
                                        <td>{{ $voucher->paket_id }}</td> <!-- Menampilkan Paket ID -->
                                        <td>{{ $voucher->user_id ?? '-' }}</td>
                                        <td>{{ $voucher->user_used ?? '-' }}</td>
                                        <td>{{ $voucher->voucher_expire }}</td>
                                        <td>{{ $voucher->created_at }}</td>
                                        <td>{{ $voucher->updated_at ?? '-' }}</td>
                                        <td>
                                            <a href="{{ route('voucher.edit', $voucher->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('voucher.destroy', $voucher->id) }}" method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Are you sure you want to delete this voucher?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            {{ $vouchers->links() }}
                        </div>
                        <div class="d-flex justify-content-center">
                            Showing {{ $vouchers->firstItem() }} to {{ $vouchers->lastItem() }} of
                            {{ $vouchers->total() }} results
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
