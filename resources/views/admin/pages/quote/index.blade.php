@extends('admin.layouts.index')

@section('title', 'Quote Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Quote List</h4>
                    {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add User</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Quote</th>
                                    <th>From</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Update At</th>
                                    <th>User Update</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($quotes as $quote)
                                    <tr>
                                        <td>{{ $quote->id }}</td>
                                        <td>{{ $quote->quote }}</td>
                                        <td>{{ $quote->from }}</td>
                                        <td>{{ $quote->title }}</td>
                                        <td>{{ $quote->image ?? '-' }}</td>
                                        <td>{{ $quote->create_at ?? '-' }}</td>
                                        <td>{{ $quote->update_at ?? '-' }}</td>
                                        <td>{{ $quote->user_update ?? '-' }}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="#" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No Users Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">{{ $quotes->links() }}</div>
                        <div class="d-flex justify-content-center">
                            Showing {{ $quotes->firstItem() }} to {{ $quotes->lastItem() }} of {{ $quotes->total() }}
                            results
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
