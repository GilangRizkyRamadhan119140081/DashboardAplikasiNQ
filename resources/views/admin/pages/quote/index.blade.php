@extends('admin.layouts.index')

@section('title', 'Quote Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Quote List</h4>
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
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($quotes as $quote)
                                    <tr>
                                        <td>{{ $quote->id }}</td>
                                        <td>{{ $quote->quote }}</td>
                                        <td>{{ $quote->from ?? '-' }}</td>
                                        <td>{{ $quote->title ?? '-' }}</td>
                                        <td>
                                            @if ($quote->image)
                                                <img src="{{ asset($quote->image) }}" alt="Image" width="50">
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $quote->create_at ? $quote->create_at->format('Y-m-d H:i') : '-' }}</td>
                                        <td>{{ $quote->update_at ? $quote->update_at->format('Y-m-d H:i') : '-' }}</td>
                                        <td>
                                            <a href="{{ route('quote.edit', $quote->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('quote.destroy', $quote->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No Quotes Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-3">
                            {{ $quotes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
