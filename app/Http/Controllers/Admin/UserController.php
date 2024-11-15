<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function UserIndex()
    {
        $users = Users::all();
        return view('admin.pages.user.index', compact('users'));
    }

    // Menampilkan form untuk membuat user baru
    public function UserCreate()
    {
        return view('admin.pages.user.create');
    }

    // Menyimpan user baru
    public function UserStore(Request $request)
    {
        $validated = $request->validate([
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
        ]);

        $validated['email_verified_at'] = Carbon::now();
        $validated['password'] = Hash::make($validated['password']);
        
        Users::create($validated);
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    // Menampilkan form edit user
    public function UserEdit($id)
    {
        $user = Users::findOrFail($id);
        return view('admin.pages.user.edit', compact('user'));
    }

    // Memperbarui user
    public function UserUpdate(Request $request, $id)
    {
        $user = Users::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'tanggal_lahir' => 'nullable|date',
            'role_id' => 'nullable|integer',
            'referal_id' => 'nullable|integer',
            'nomor_hp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'kode_voucher' => 'nullable|string|max:255',
            'kode_paket' => 'nullable|string|max:255',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $user->update($validated);
        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui');
    }

    // Menghapus user
    public function UserDestroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}


