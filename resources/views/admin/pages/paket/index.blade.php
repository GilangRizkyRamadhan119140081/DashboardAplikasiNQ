@extends('admin.layouts.index')

@section('title', 'Paket Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Paket List</h4>
                    {{-- <a href="{{ route('admin.paket.create') }}" class="btn btn-primary">Add Paket</a> --}}
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
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="#" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
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
