<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel; // Import model Artikel
use Illuminate\Pagination\Paginator;

class ArtikelController extends Controller
{
    // Menampilkan halaman index artikel
    public function ArtikelIndex(Request $request)
{
    // Ambil input pencarian dari query string
    $search = $request->input('search');

    // Filter data berdasarkan pencarian
    $artikels = Artikel::when($search, function ($query, $search) {
        return $query->where('judul', 'like', "%$search%") // Cari berdasarkan judul
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%"); // Cari berdasarkan nama penulis
            })
            ->orWhere('link', 'like', "%$search%"); // Cari berdasarkan link
    })
    ->latest()
    ->paginate(10); // Batasi data menjadi 10 per halaman

    return view('admin.pages.artikel.index', compact('artikels'));
}


    // Menampilkan form untuk membuat artikel baru
    public function ArtikelCreate()
    {
        return view('admin.pages.artikel.create');
    }

    // Menyimpan data artikel baru
    public function ArtikelStore(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'judul'   => 'required|string|max:255',
            'isi'     => 'required|string',
            'id_user' => 'required|integer|exists:users,id',
            'image'   => 'nullable|string|max:255',
            'link'    => 'nullable|string|max:255',
        ]);

        // Menyimpan data ke tabel artikel
        Artikel::create($validated);

        return redirect()->route('admin.pages.artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit artikel
    public function ArtikelEdit($id)
    {
        // Mengambil data artikel berdasarkan id
        $artikel = Artikel::findOrFail($id);

        // Menampilkan form edit dengan data yang sudah ada
        return view('admin.pages.artikel.edit', compact('artikel'));
    }

    // Memperbarui data artikel
    public function ArtikelUpdate(Request $request, $id)
    {
        // Mengambil data artikel berdasarkan id
        $artikel = Artikel::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'judul'   => 'required|string|max:255',
            'isi'     => 'required|string',
            'id_user' => 'required|integer|exists:users,id',
            'image'   => 'nullable|string|max:255',
            'link'    => 'nullable|string|max:255',
        ]);

        // Memperbarui data artikel
        $artikel->update($validated);

        return redirect()->route('admin.pages.artikel.index')->with('success', 'Artikel berhasil diperbarui');
    }

    public function ArtikelDraft()
{
    // Ambil semua artikel
    $artikels = Artikel::latest()->paginate(10);

    // Tampilkan halaman draft
    return view('admin.pages.artikel.draft', compact('artikels'));
}



    // Menghapus data artikel
    public function ArtikelDestroy($id)
    {
        // Mengambil data artikel berdasarkan id
        $artikel = Artikel::findOrFail($id);

        // Menghapus artikel
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus');
    }
}
