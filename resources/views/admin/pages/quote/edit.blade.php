@extends('admin.layouts.index')

@section('title', 'Edit Quote')

@section('content')
    <div class="container mt-5">
        <h2>Edit Quote</h2>
        <form action="{{ route('quote.update', $quote->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Quote -->
            <div class="mb-3">
                <label for="quote" class="form-label">Quote</label>
                <input type="text" class="form-control" id="quote" name="quote"
                    value="{{ old('id', $quote->quote) }}" required>
            </div>

            <!-- From -->
            <div class="mb-3">
                <label for="from" class="form-label">From</label>
                <input type="text" class="form-control" id="from" name="from"
                    value="{{ old('quote', $quote->from) }}" required>
            </div>

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('from', $quote->title) }}" required>
            </div>

            <!-- User Update -->
            <div class="mb-3">
                <label for="user_update" class="form-label">User Update</label>
                <input type="number" class="form-control" id="user_update" name="user_update"
                    value="{{ old('title', $quote->user_update) }}" required>
            </div>

            <!-- Image URL -->
            <div class="mb-3">
                <label for="link" class="form-label">Image URL (Opsional)</label>
                <input type="url" class="form-control" id="link" name="link"
                    value="{{ old('image', $quote->image) }}">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Update Quote</button>
        </form>
    </div>
@endsection
