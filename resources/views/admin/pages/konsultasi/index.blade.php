@extends('admin.layouts.index')

@section('title', 'Consultation Management')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Trainer List</h4>
                {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add User</a> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Update At</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->role_id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->nomor_hp ?? '-' }}</td>
                                    <td>{{ $user->referal_code ?? '-' }}</td>
                                    <td>{{ $user->referal_from ?? '-' }}</td>
                                    <td>{{ $user->kode_paket ?? '-' }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">View</a>
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
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection