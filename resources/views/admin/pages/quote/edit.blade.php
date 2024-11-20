@extends('admin.layouts.index')

@section('title', 'Edit Quote')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Quote</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('quote.update', $quote->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="quote" class="form-label">Quote</label>
                            <textarea id="quote" name="quote" class="form-control" rows="4" required>{{ old('quote', $quote->quote) }}</textarea>
                            @error('quote')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="from" class="form-label">From</label>
                            <input type="text" id="from" name="from" class="form-control"
                                value="{{ old('from', $quote->from) }}" placeholder="Who said it?">
                            @error('from')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control"
                                value="{{ old('title', $quote->title) }}" placeholder="Title of the quote">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" id="image" name="image" class="form-control"
                                value="{{ old('image', $quote->image) }}" placeholder="URL of image (optional)">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Quote</button>
                        <a href="{{ route('quote.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
