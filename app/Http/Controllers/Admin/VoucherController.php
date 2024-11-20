<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Voucher;
use App\Models\DetailPaket;
use Illuminate\Pagination\Paginator;

class VoucherController extends Controller
{
    // Menampilkan daftar voucher dengan paginasi
    public function VoucherIndex()
    {
        // Ambil semua data voucher dengan paginasi
        $vouchers = Voucher::paginate(16); // Menampilkan 16 voucher per halaman
        return view('admin.pages.voucher.index', compact('vouchers')); // Pass data ke view
    }

    // Menampilkan form untuk membuat voucher baru
    public function VoucherCreate()
{
    // Ambil semua data paket dari tabel detail_paket
    $paketOptions = DetailPaket::all(); // Ambil semua paket yang ada di tabel detail_paket

    // Kirim data paketOptions ke view
    return view('admin.pages.voucher.create', compact('paketOptions'));
}


    // Menyimpan voucher baru
    public function VoucherStore(Request $request)
{
    // Validasi untuk voucher_code dan paket_id
    $validated = $request->validate([
        'voucher_code' => 'required|string|max:255', // Voucher code harus ada dan string
        'paket_id'     => 'required|exists:detail_paket,id_paket', // Pastikan paket_id ada di tabel detail_paket
    ]);

    // Menyimpan voucher baru
    Voucher::create([
        'voucher_code'  => $validated['voucher_code'], // voucher_code yang diinputkan
        'paket_id'      => $validated['paket_id'],     // paket_id yang dipilih
        'user_id'       => 0, // Default user_id (jika ada relasi dengan user, bisa diubah)
        'user_used'     => 0, // Default user_used
        'voucher_expire'=> null, // Default voucher_expire (bisa disesuaikan)
    ]);

    // Redirect ke halaman voucher.index dengan pesan sukses
    return redirect()->route('voucher.index')->with('success', 'Voucher successfully created!');
}



    // Menampilkan form untuk mengedit voucher yang ada
    public function VoucherEdit($id)
{
    // Menampilkan data voucher berdasarkan id
    $voucher = Voucher::findOrFail($id);

    // Ambil data paket dari tabel detail_paket
    $paketOptions = DetailPaket::select('id_paket', 'kode_paket', 'harga')->get();

    // Oper data voucher dan paketOptions ke view
    return view('admin.pages.voucher.edit', compact('voucher', 'paketOptions'));
}

// Memperbarui voucher yang ada
public function VoucherUpdate(Request $request, $id)
{
    // Menampilkan data voucher yang akan diperbarui
    $voucher = Voucher::findOrFail($id);

    // Validasi input dari form
    $validated = $request->validate([
        'user_id' => 'nullable|exists:users,id',
        'user_used' => 'nullable|exists:users,id',
        'voucher_code' => 'required|string|max:255',
        'voucher_expire' => 'required|date',
        'paket_id' => 'required|exists:detail_paket,id_paket',
    ]);

    // Memperbarui data voucher
    $voucher->update($validated);

    // Redirect ke halaman daftar voucher dengan pesan sukses
    return redirect()->route('voucher.index')->with('success', 'Voucher berhasil diperbarui!');
}


    // Menghapus voucher yang ada
    public function VoucherDestroy($id)
    {
        // Mencari dan menghapus voucher berdasarkan ID
        $voucher = Voucher::findOrFail($id);
        $voucher->delete();

        // Redirect ke halaman daftar voucher dengan pesan sukses
        return redirect()->route('voucher.index')->with('success', 'Voucher berhasil dihapus!');
    }
}
