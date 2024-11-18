<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailProduk;
use Illuminate\Pagination\Paginator;


class ProdukController extends Controller
{
    public function ProdukIndex()
    {
        $produks = DetailProduk::all();
        return view('admin.pages.produk.index',compact('produks')); // Sesuaikan dengan view yang ada
    }
    public function ProdukCreate()
    {
        return view('admin.pages.produk.create');
    }
    public function ProdukStore(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'kode_produk' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'nama_produk' => 'required|string|max:255',
            'detail' => 'required|string',
            'harga' => 'required|numeric',
            'link' => 'nullable|string|max:255',
            'id_user' => 'required|exists:users,id',
            'pemilik' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);

        // Menyimpan data ke tabel produk
        DetailProduk::create($validated);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit produk
    public function ProdukEdit($id)
    {
        // Mengambil data produk berdasarkan id
        $produk = DetailProduk::findOrFail($id);

        // Menampilkan form edit dengan data yang sudah ada
        return view('admin.pages.produk.edit', compact('produk'));
    }

    // Memperbarui data produk
    public function ProdukUpdate(Request $request, $id)
    {
        // Mengambil data produk berdasarkan id
        $produk = DetailProduk::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'kode_produk' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'nama_produk' => 'required|string|max:255',
            'detail' => 'required|string',
            'harga' => 'required|numeric',
            'link' => 'nullable|string|max:255',
            'id_user' => 'required|exists:users,id',
            'pemilik' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);
        
        

        // Memperbarui data produk
        $produk->update($validated);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    // Menghapus data produk
    public function ProdukDestroy($id)
    {
        // Mengambil data produk berdasarkan id
        $produk = DetailProduk::findOrFail($id);

        // Menghapus produk
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
