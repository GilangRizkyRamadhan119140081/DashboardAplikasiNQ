<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Method untuk menampilkan form create user
    public function UserIndex()
    {
        $users = Users::all();
        return view('admin.pages.user.index', compact('users')); // Sesuaikan dengan view yang ada
    }
    public function UserCreate()
    {
        return view('admin.pages.user.create');
    }

    // Method untuk menyimpan data user baru
    public function UserStore(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'tanggal_lahir' => 'nullable|date',
            'role_id' => 'nullable|integer',
            'referal_id' => 'nullable|integer',
            'nomor_hp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'kode_voucher' => 'nullable|string|max:255',
            'kode_paket' => 'nullable|string|max:255',
            'expired' => 'nullable|date',
            'image' => 'nullable|string|max:255',
        ]);

        // Membuat user baru di database
        Users::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
            'tanggal_lahir' => $request->tanggal_lahir,
            'referal_id' => $request->referal_id,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'image' => $request->image,
            'kode_voucher' => $request->kode_voucher,
            'kode_paket' => $request->kode_paket,
            'expired' => $request->expired,
        ]);

        // Mengarahkan kembali ke halaman create dengan pesan sukses
        return redirect()->route('user.create')->with('success', 'User berhasil ditambahkan');
    }

}

