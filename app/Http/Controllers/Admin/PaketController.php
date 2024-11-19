<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailPaket;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class PaketController extends Controller
{
    // Menampilkan daftar paket
    public function PaketIndex()
    {
        // Mengambil semua data dari tabel detail_paket
        $detail_paket = DetailPaket::all(); // Mengambil semua data tanpa pagination

        // Jika ingin menggunakan pagination
        // $detail_paket = DetailPaket::paginate(10);

        return view('admin.pages.paket.index', compact('detail_paket'));
    }

    // Menampilkan form untuk membuat paket baru
    public function PaketCreate()
    {
        return view('admin.pages.paket.create');
    }

    // Menyimpan data paket baru
    public function PaketStore(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'id_paket' => 'required|exists:master_paket,id',  // Pastikan id_paket ada di tabel master_paket
            'kode_paket' => 'required|string|max:255',
            'hari' => 'required|integer',
            'harga' => 'required|numeric',
            'link' => 'nullable|url',
            'deskripsi1' => 'nullable|string',
            'deskripsi2' => 'nullable|string',
            'deskripsi3' => 'nullable|string',
            'deskripsi4' => 'nullable|string',
            'deskripsi5' => 'nullable|string',
            'deskripsi6' => 'nullable|string',
            'deskripsi7' => 'nullable|string',
        ]);

        // Menyimpan data ke tabel detail_paket
        DetailPaket::create($validated);

        return redirect()->route('admin.pages.paket.index')->with('success', 'Paket berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit paket
    public function PaketEdit($id)
    {
        // Mengambil data paket berdasarkan id
        $paket = DetailPaket::findOrFail($id);

        // Menampilkan form edit dengan data yang sudah ada
        return view('admin.pages.paket.edit', compact('paket'));
    }

    // Memperbarui data paket
    public function PaketUpdate(Request $request, $id)
    {
        // Mengambil data paket berdasarkan id
        $paket = DetailPaket::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'id_paket' => 'required|exists:master_paket,id',  // Pastikan id_paket ada di tabel master_paket
            'kode_paket' => 'required|string|max:255',
            'hari' => 'required|integer',
            'harga' => 'required|numeric',
            'link' => 'nullable|url',
            'deskripsi1' => 'nullable|string',
            'deskripsi2' => 'nullable|string',
            'deskripsi3' => 'nullable|string',
            'deskripsi4' => 'nullable|string',
            'deskripsi5' => 'nullable|string',
            'deskripsi6' => 'nullable|string',
            'deskripsi7' => 'nullable|string',
        ]);

        // Memperbarui data paket
        $paket->update($validated);

        return redirect()->route('paket.index')->with('success', 'Paket berhasil diperbarui');
    }

    // Menghapus data paket
    public function PaketDestroy($id)
    {
        // Mengambil data paket berdasarkan id
        $paket = DetailPaket::findOrFail($id);

        // Menghapus paket
        $paket->delete();

        return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus');
    }
}
