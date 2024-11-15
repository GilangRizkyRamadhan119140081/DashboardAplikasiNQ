@extends('admin.layouts.index')

@section('title', 'Consultation Management')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Consultation List</h4>
                {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add User</a> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Judul Konsultasi</th>
                                <th>Deskripsi Konsultasi</th>
                                <th>Tanggal Konsultasi</th>
                                <th>Created At</th>
                                <th>Update At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($konsultasi as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user_id  }}</td>
                                    <td>{{ $item->judul_konsultasi }}</td>
                                    <td>{{ $item->deskripsi_konsultasi }}</td>
                                    <td>{{ $item->tanggal_konsultasi ?? '-' }}</td>
                                    <td>{{ $item->created_at ?? '-' }}</td>
                                    <td>{{ $item->updated_at ?? '-' }}</td>
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
                        </tbody>
                    </table>
                    {{-- <div class="d-flex justify-content-center">{{ $konsultasi->links() }}</div>
                    <div class="d-flex justify-content-center">
                        Showing {{ $konsultasi->firstItem() }} to {{ $konsultasi->lastItem() }} of {{ $konsultasi->total() }} results
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection