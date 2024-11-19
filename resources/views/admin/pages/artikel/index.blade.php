@extends('admin.layouts.index')

@section('title', 'Article Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h4 class="card-title">Article List</h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($artikels as $artikel)
                                    <tr>
                                        <td>{{ $artikel->id }}</td>
                                        <td>{{ $artikel->judul }}</td>
                                        <td>{{ $artikel->user->name ?? 'N/A' }}</td>
                                        <td>
                                            @if ($artikel->image)
                                                <img src="{{ asset('storage/' . $artikel->image) }}" alt="Image"
                                                    width="50">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($artikel->link)
                                                <a href="{{ $artikel->link }}" target="_blank">{{ $artikel->link }}</a>
                                            @else
                                                <span>No Link</span>
                                            @endif
                                        </td>
                                        <td>{{ $artikel->created_at ? $artikel->created_at->format('d-m-Y') : '-' }}</td>
                                        <td>
                                            <!-- Link Edit -->
                                            <a href="{{ route('artikel.edit', $artikel->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <!-- Tombol Delete dengan Modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $artikel->id }}">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $artikel->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $artikel->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $artikel->id }}">Confirm Deletion
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete the article with ID
                                                            {{ $artikel->id }}?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('artikel.destroy', $artikel->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No articles found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3">
                        {{ $artikels->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
