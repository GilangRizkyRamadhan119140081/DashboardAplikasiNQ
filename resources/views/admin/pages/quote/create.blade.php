@extends('admin.layouts.index')

@section('title', 'Create New Quote')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Quote</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('quote.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="quote" class="form-label">Quote</label>
                            <textarea id="quote" name="quote" class="form-control" rows="4" required></textarea>
                            @error('quote')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="from" class="form-label">From</label>
                            <input type="text" id="from" name="from" class="form-control"
                                placeholder="Who said it?">
                            @error('from')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control"
                                placeholder="Title of the quote">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" id="image" name="image" class="form-control"
                                placeholder="URL of image (optional)">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save Quote</button>
                        <a href="{{ route('quote.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
