@extends('admin.layouts.index')

@section('title', 'Produk List')

@section('content')
    {{-- <div class="container-fluid">
        <!-- Div untuk membungkus judul dengan latar belakang putih -->
        <div class="bg-white p-3 rounded shadow-sm mb-4"> 
            <h1 class="my-0">Daftar Produk</h1> <!-- Hilangkan margin-top dan margin-bottom pada h1 -->
        </div> --}}

        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="card"> --}}
                    <div class="bg-white p-3 rounded shadow-sm mb-4"> 
                        <h4 class="my-0">Daftar Produk</h4>    
                    </div>

        <!-- Div untuk membungkus tabel -->
        <div class="bg-white p-3 rounded shadow-sm"> <!-- Div berwarna putih untuk tabel -->
            <div class="table-responsive">
                <table class="table table-bordered">
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
                        @foreach ($produks as $produk)
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
                                    <button type="button" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-pencil"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- Akhir div membungkus tabel -->
    </div>
    {{-- </div> --}}
</div>

@endsection
