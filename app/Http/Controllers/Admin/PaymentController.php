<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;

use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    // Menampilkan daftar pembayaran
    public function PaymentIndex(Request $request)
    {
        $search = $request->input('search');
        $viewAll = $request->input('view_all'); // Menambahkan parameter untuk melihat semua data
    
        // Filter data berdasarkan pencarian
        $query = Payment::when($search, function ($query, $search) {
            return $query->where('order_id', 'like', "%$search%")
                         ->orWhere('status', 'like', "%$search%")
                         ->orWhere('customer_email', 'like', "%$search%");
        });
    
        // Jika pengguna memilih "view_all", maka kita hitung total harga dari seluruh data
        if ($viewAll) {
            $totalPrice = DB::table('nq_payment')
                ->when($search, function ($query, $search) {
                    return $query->where('order_id', 'like', "%$search%")
                                 ->orWhere('status', 'like', "%$search%")
                                 ->orWhere('customer_email', 'like', "%$search%");
                })
                ->sum('price'); // Hitung total harga untuk semua data yang sesuai pencarian
            $payments = $query->get(); // Ambil semua data tanpa pagination
        } else {
            // Jika tidak, kita gunakan pagination dengan 10 data per halaman
            $totalPrice = DB::table('nq_payment')
                ->when($search, function ($query, $search) {
                    return $query->where('order_id', 'like', "%$search%")
                                 ->orWhere('status', 'like', "%$search%")
                                 ->orWhere('customer_email', 'like', "%$search%");
                })
                ->sum('price'); // Total harga tetap dihitung dari seluruh data yang ada
            $payments = $query->orderBy('created_at', 'desc')->paginate(10); // Pagination dengan 10 data per halaman
        }
    
        return view('admin.pages.payment.index', compact('payments', 'totalPrice', 'viewAll'));
    }
    


    // Menampilkan form untuk membuat pembayaran baru
    public function PaymentCreate()
    {
        return view('admin.pages.payment.create');
    }

    // Menyimpan pembayaran baru
    public function PaymentStore(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'order_id' => 'required|string|max:255|unique:nq_payment,order_id',
            'user_id' => 'required|integer',
            'status' => 'required|string|max:10',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'item_id' => 'nullable|string|max:255',
            'item_name' => 'nullable|string|max:255',
            'customer_first_name' => 'nullable|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'checkout_link' => 'nullable|url|max:255',
            'type_payment' => 'nullable|string|max:255',
            'type_payment_detail' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);

        // Simpan data ke database
        Payment::create($validated);

        return redirect()->route('payment.index')->with('success', 'Pembayaran berhasil ditambahkan');
    }

    // Menampilkan form edit pembayaran
    public function PaymentEdit($id)
    {
        $payment = Payment::findOrFail($id);
        return view('admin.pages.payment.edit', compact('payment'));
    }

    // Memperbarui pembayaran
    public function PaymentUpdate(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);

        // Validasi data input
        $validated = $request->validate([
            'order_id' => 'required|string|max:255|unique:nq_payment,order_id,' . $id,
            'user_id' => 'required|integer',
            'status' => 'required|string|max:10',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'item_id' => 'nullable|string|max:255',
            'item_name' => 'nullable|string|max:255',
            'customer_first_name' => 'nullable|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'checkout_link' => 'nullable|url|max:255',
            'type_payment' => 'nullable|string|max:255',
            'type_payment_detail' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);

        // Perbarui data di database
        $payment->update($validated);

        return redirect()->route('payment.index')->with('success', 'Pembayaran berhasil diperbarui');
    }

    // Menghapus pembayaran
    public function PaymentDestroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('payment.index')->with('success', 'Pembayaran berhasil dihapus');
    }

    // Memperbarui status pembayaran melalui AJAX
    // Menampilkan halaman edit status
public function editStatus($id)
{
    $payment = Payment::findOrFail($id);


    return view('admin.pages.payment.edit-status', compact('payment'));
}

// Memperbarui status pembayaran
public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|string|in:settlement,pending,expire',
    ]);



    $payment = Payment::findOrFail($id);
    $payment->status = $request->input('status');
    $payment->save();

    return redirect()->route('payment.index')->with('success', 'Status pembayaran berhasil diperbarui');
}

}
