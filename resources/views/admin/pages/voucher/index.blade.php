@extends('admin.layouts.index')

@section('title', 'Voucher List')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Voucher List</h4>
                    {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add User</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Used by User</th>
                                    <th>Voucher Code </th>
                                    <th>Voucher Expire </th>
                                    <th>ID Paket </th>
                                    <th>Created At</th>
                                    <th>Update At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($voucher as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->user_used ?? '-' }}</td>
                                    <td>{{ $item->voucher_code ?? '-' }}</td>
                                    <td>{{ $item->voucher_expire ?? '-' }}</td>
                                    <td>{{ $item->paket_id ?? '-' }}</td>
                                    <td>{{ $item->created_at ?? '-' }}</td>
                                    <td>{{ $item->updated_at ?? '-' }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="#" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No Vouchers Found</td>
                                </tr>
                            @endforelse
                            
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">{{ $voucher->links() }}</div>
                        <div class="d-flex justify-content-center">
                            Showing {{ $voucher->firstItem() }} to {{ $voucher->lastItem() + 4 }} of
                            {{ $voucher->total() }}
                            results
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
