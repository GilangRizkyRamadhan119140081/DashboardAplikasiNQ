<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\DetailPaket;
use App\Models\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function UserIndex(Request $request)
{
    // Ambil input pencarian dari query string
    $search = $request->input('search');

    // Filter data berdasarkan pencarian
    $users = Users::when($search, function ($query, $search) {
        return $query->where('name', 'like', "%$search%") // Cari berdasarkan nama
            ->orWhere('email', 'like', "%$search%")       // Cari berdasarkan email
            ->orWhere('role_id', 'like', "%$search%");    // Cari berdasarkan Role ID
    })
    ->paginate(10); // Pagination 10 data per halaman

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
            'password' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'role_id' => 'nullable|integer',
            'referal_id' => 'nullable|integer',
            'nomor_hp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'kode_voucher' => 'nullable|string|max:255',
            'kode_paket' => 'nullable|string|max:255',
        ]);

        $validated['email_verified_at'] = Carbon::now('Asia/Jakarta');
        $request->password = '123456';
        $validated['password'] = $request->password;
        Users::create($validated);
        dd($validated);


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
        $cekdetailpaketlog = DetailPaket::where('kode_paket',$request->kode_paket)->first();
        Log::create([
            'user_id' => $id,
            'activity' => 'Berlangganan '. $cekdetailpaketlog->kode_paket. ' hari',
        ]);

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
            'expired' => 'nullable|date',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }
        $kodev_exp = Users::where('id', $id)->first();
        $cekdetailpaket = DetailPaket::where('kode_paket',$request->kode_paket)->first();

        Carbon::setLocale('id');
        $now = Carbon::now('Asia/Jakarta');
        $cekhari = $cekdetailpaket->hari;
        $addDaysNow = $now->copy()->addDays($cekhari);

        $validated['expired'] = $addDaysNow->toDateTimeString();


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


