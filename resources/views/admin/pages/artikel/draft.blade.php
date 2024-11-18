@extends('admin.layouts.index')

@section('title', 'Draft Article')

@section('content')
    <div class="container mt-5">
        <h2>Manage Articles</h2>

        <!-- Filter Buttons -->
        <div class="mb-3">
            <button class="btn btn-primary filter-btn" data-filter="all">All</button>
            <button class="btn btn-secondary filter-btn" data-filter="draft">Draft</button>
            <button class="btn btn-success filter-btn" data-filter="published">Published</button>
        </div>

        <!-- Artikel List -->
        <div id="artikel-list">
            @foreach ($artikels as $artikel)
                <div class="artikel-item {{ $loop->iteration % 2 == 0 ? 'draft' : 'published' }}">
                    <h4>{{ $artikel->judul }}</h4>
                    <p>{{ $artikel->isi }}</p>
                    <small>Author: {{ $artikel->user->name ?? 'Unknown' }}</small>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const artikelItems = document.querySelectorAll('.artikel-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filter = button.getAttribute('data-filter');

                    artikelItems.forEach(item => {
                        if (filter === 'all') {
                            item.style.display = 'block';
                        } else if (item.classList.contains(filter)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@endsection
