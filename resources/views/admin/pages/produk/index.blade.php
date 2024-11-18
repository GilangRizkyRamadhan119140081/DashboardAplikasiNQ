@extends('admin.layouts.index')

@section('title', 'Produk List')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Produk</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Kode Produk</th>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Detail</th>
                                    <th>Harga</th>
                                    <th>Pemilik</th>
                                    <th>Gambar</th>
                                    <th>Dibuat Pada</th>
                                    <th>Diperbarui Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($produks as $produk)
                                    <tr>
                                        <td>{{ $produk->id }}</td>
                                        <td>{{ $produk->kode_produk }}</td>
                                        <td>{{ $produk->kategori }}</td>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td>{{ $produk->detail }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->pemilik }}</td>
                                        <td>
                                            @if ($produk->image)
                                                <img src="{{ asset('storage/images/' . $produk->image) }}"
                                                    alt="{{ $produk->nama_produk }}" width="100">
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        <td>{{ $produk->created_at }}</td>
                                        <td>{{ $produk->updated_at }}</td>
                                        <td>
                                            <!-- Link Edit -->
                                            <a href="{{ route('produk.edit', $produk->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <!-- Tombol Delete dengan Modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $produk->id }}">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $produk->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $produk->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $produk->id }}">Konfirmasi
                                                                Penghapusan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus paket dengan ID
                                                            {{ $produk->id }}?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ route('produk.destroy', $produk->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11" class="text-center">No Products Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
