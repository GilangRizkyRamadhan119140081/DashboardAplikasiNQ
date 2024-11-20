<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Voucher;
use App\Models\Users;
use Illuminate\Pagination\Paginator;


class VoucherController extends Controller
{
    public function VoucherIndex()
    {
        $voucher = Voucher::paginate(16);
        return view('admin.pages.voucher.index',compact('voucher')); // Sesuaikan dengan view yang ada
    }
    public function VoucherCreate()
    {
        return view('admin.pages.voucher.create');
    }
        // Menyimpan voucher baru
    public function VoucherStore(Request $request)
    {
            
        $validated = $request->validate([
        'id' => 'nullable|exists:nq_voucher,id',
        'user_id' => 'required|integer|exists:users,id',
        'user_used' => 'nullable|integer',
        'voucher_code' => 'required|string|max:255',
        'voucher_expire' => 'required|date',
        'paket_id' => 'nullable|integer|exists:detail_paket,id_paket',
            ]);
    
        // dd($validated);
    
            // Menyimpan data ke database
        Voucher::create($validated);
        return redirect()->route('voucher.index')->with('success', 'Voucher successfully created!');
    }
    
        // Menampilkan form edit untuk voucher tertentu
        public function VoucherEdit($id)
        {
            $voucher = Voucher::findOrFail($id);
            return view('admin.pages.voucher.edit', compact('voucher'));
        }
    
        // Memperbarui voucher tertentu
        public function VoucherUpdate(Request $request, $id)
        {
            $voucher = Voucher::findOrFail($id);
    
            $validated = $request->validate([
                'user_id' => 'required|integer',
                'voucher_code  ' => 'required|string|max:255',
                'voucher_expire' => 'required|date',
            ]);
    
            // Update voucher
            $voucher->update($validated);
    
            return redirect()->route('voucher.index')->with('success', 'Voucher successfully updated!');
        }
    
        // Menghapus voucher tertentu
        public function VoucherDestroy($id)
        {
            $voucher = Voucher::findOrFail($id);
            $voucher->delete();
    
            return redirect()->route('voucher.index')->with('success', 'Voucher successfully deleted!');
        }
}
