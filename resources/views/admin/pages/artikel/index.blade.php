@extends('admin.layouts.index')

@section('title', 'Article Management')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="card"> --}}
                    <div class="bg-white p-3 rounded shadow-sm mb-4"> 
                        <h4 class="my-0">Daftar Artikel</h4>    
                    </div>

        <!-- Div untuk membungkus tabel -->
        <div class="bg-white p-3 rounded shadow-sm">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>ID User</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Dibuat Pada</th>
                            <th>Diperbarui Pada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td>{{ $artikel->id }}</td>
                                <td>{{ $artikel->judul }}</td>
                                <td>{{ $artikel->isi }}</td>
                                <td>{{ $artikel->id_user }}</td>
                                <td>
                                    @if ($artikel->image)
                                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}"
                                            width="100">
                                    @else
                                        Tidak ada gambar
                                    @endif
                                </td>
                                <td>{{ $artikel->link }}</td>
                                <td>{{ $artikel->created_at }}</td>
                                <td>{{ $artikel->updated_at }}</td>
                                <td>                                                
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-dark btn-sm">Select</button>
                                    <button type="button"
                                        class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Grant Permission</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">View Details</a>
                                    </div>
                                </div></td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div> <!-- Akhir div membungkus tabel -->
    </div>
</div>
</div>
@endsection
