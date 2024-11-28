<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Illuminate\Support\Facades\Validator;

class KonsultasiController extends Controller
{
    // Menampilkan daftar konsultasi
    public function KonsultasiIndex(Request $request)
{
    // Ambil kata kunci pencarian
    $search = $request->input('search');

    // Filter data berdasarkan pencarian
    $konsultasis = Konsultasi::when($search, function ($query, $search) {
        return $query->where('judul_konsultasi', 'like', "%$search%") // Pencarian berdasarkan Judul Konsultasi
            ->orWhere('user_id', 'like', "%$search%"); // Pencarian berdasarkan User ID
    })
    ->latest()
    ->paginate(10); // Data per halaman

    return view('admin.pages.konsultasi.index', compact('konsultasis')); // Kirim data ke view
}


    // Menampilkan form untuk membuat konsultasi baru
    public function KonsultasiCreate()
    {
        return view('admin.pages.konsultasi.create');
    }

    // Menyimpan konsultasi baru
    public function KonsultasiStore(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'user_id'             => 'required|exists:users,id',
            'judul_konsultasi'    => 'required|string|max:255',
            'deskripsi_konsultasi'=> 'required|string',
            'tanggal_konsultasi'  => 'nullable|date',
        ]);

        // Simpan data
        Konsultasi::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('konsultasi.index')->with('success', 'Konsultasi berhasil ditambahkan!');
    }

    // Menampilkan form edit untuk konsultasi tertentu
    public function KonsultasiEdit($id)
    {
        $konsultasi = Konsultasi::findOrFail($id); // Cari data berdasarkan ID
        return view('admin.pages.konsultasi.edit', compact('konsultasi'));
    }

    // Memperbarui konsultasi
    public function KonsultasiUpdate(Request $request, $id)
    {
        // Cari data berdasarkan ID
        $konsultasi = Konsultasi::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'user_id'             => 'required|exists:users,id',
            'judul_konsultasi'    => 'required|string|max:255',
            'deskripsi_konsultasi'=> 'required|string',
            'tanggal_konsultasi'  => 'nullable|date',
        ]);

        // Update data
        $konsultasi->update($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('konsultasi.index')->with('success', 'Konsultasi berhasil diperbarui!');
    }

    // Menghapus konsultasi
    public function KonsultasiDestroy($id)
    {
        // Cari data berdasarkan ID
        $konsultasi = Konsultasi::findOrFail($id);

        // Hapus data
        $konsultasi->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('konsultasi.index')->with('success', 'Konsultasi berhasil dihapus!');
    }
}
