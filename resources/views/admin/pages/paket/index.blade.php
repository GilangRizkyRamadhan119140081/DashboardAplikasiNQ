@extends('admin.layouts.index')

@section('title', 'Paket Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Paket List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Paket ID</th>
                                    <th>Kode Paket</th>
                                    <th>Hari</th>
                                    <th>Harga</th>
                                    <th>Deskripsi 1</th>
                                    <th>Deskripsi 2</th>
                                    <th>Deskripsi 3</th>
                                    <th>Deskripsi 4</th>
                                    <th>Deskripsi 5</th>
                                    <th>Deskripsi 6</th>
                                    <th>Deskripsi 7</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($detail_paket as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->id_paket }}</td>
                                        <td>{{ $item->kode_paket }}</td>
                                        <td>{{ $item->hari }}</td>
                                        <td>{{ number_format($item->harga, 0, ',', '.') }}</td>
                                        <td>{{ Str::words($item->deskripsi1 ?? '-', 10, '...') }}</td>
                                        <td>{{ Str::words($item->deskripsi2 ?? '-', 10, '...') }}</td>
                                        <td>{{ Str::words($item->deskripsi3 ?? '-', 10, '...') }}</td>
                                        <td>{{ Str::words($item->deskripsi4 ?? '-', 10, '...') }}</td>
                                        <td>{{ Str::words($item->deskripsi5 ?? '-', 10, '...') }}</td>
                                        <td>{{ Str::words($item->deskripsi6 ?? '-', 10, '...') }}</td>
                                        <td>{{ Str::words($item->deskripsi7 ?? '-', 10, '...') }}</td>
                                        <td>
                                            <!-- Link Edit -->
                                            <a href="{{ route('paket.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <!-- Tombol Delete dengan Modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $item->id }}">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $item->id }}">Konfirmasi
                                                                Penghapusan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus paket dengan ID
                                                            {{ $item->id }}?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ route('paket.destroy', $item->id) }}"
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
                                        <td colspan="13" class="text-center">Data tidak ditemukan</td>
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
