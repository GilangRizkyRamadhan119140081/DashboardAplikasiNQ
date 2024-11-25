@extends('admin.layouts.index')

@section('title', 'Konsultasi Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Konsultasi List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Judul Konsultasi</th>
                                    <th>Tanggal Konsultasi</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($konsultasis as $konsultasi)
                                    <tr>
                                        <td>{{ $konsultasi->id }}</td>
                                        <td>{{ $konsultasi->user_id }}</td>
                                        <td>{{ $konsultasi->judul_konsultasi }}</td>
                                        <td>{{ $konsultasi->tanggal_konsultasi ?? '-' }}</td>
                                        <td>{{ $konsultasi->created_at }}</td>
                                        <td>{{ $konsultasi->updated_at ?? '-' }}</td>
                                        <td>
                                            <a href="{{ route('konsultasi.edit', $konsultasi->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('konsultasi.destroy', $konsultasi->id) }}" method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Are you sure you want to delete this consultation?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No konsultasi found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        {{ $konsultasis->links() }} <!-- Pagination Links -->
                    </div>
                    <div class="d-flex justify-content-center">
                        Showing {{ $konsultasis->firstItem() }} to {{ $konsultasis->lastItem() }} of
                        {{ $konsultasis->total() }} results
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
