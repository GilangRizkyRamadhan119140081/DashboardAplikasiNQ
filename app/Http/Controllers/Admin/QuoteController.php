<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quote;
use Carbon\Carbon;

class QuoteController extends Controller
{
    // Menampilkan daftar quotes
    public function QuoteIndex()
    {
        $quotes = Quote::latest()->paginate(10);
        return view('admin.pages.quote.index', compact('quotes'));
    }

    // Menampilkan form untuk membuat quote baru
    public function QuoteCreate()
    {
        return view('admin.pages.quote.create');
    }

    // Menyimpan quote baru
    public function QuoteStore(Request $request)
    {
        $validated = $request->validate([
            'quote' => 'required|string|max:500',
            'from'  => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255', // Menambahkan image sebagai optional
        ]);

        // Tambahkan update_at dan user_update di sini
        $validated['user_update'] = 0;  // user_update default 0
        $validated['update_at'] = Carbon::now();  // Set update_at dengan waktu sekarang

        // Menyimpan data ke database (user_update otomatis = 0 dari model)
        Quote::create($validated);

        return redirect()->route('quote.index')->with('success', 'Quote successfully created!');
    }

    // Menampilkan form edit untuk quote tertentu
    public function QuoteEdit($id)
    {
        $quote = Quote::findOrFail($id);
        return view('admin.pages.quote.edit', compact('quote'));
    }

    // Memperbarui quote tertentu
    public function QuoteUpdate(Request $request, $id)
    {
        $quote = Quote::findOrFail($id);

        $validated = $request->validate([
            'quote' => 'required|string|max:500',
            'from'  => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);

        // Update quote (user_update tetap otomatis sesuai model)
        $quote->update($validated);

        return redirect()->route('quote.index')->with('success', 'Quote successfully updated!');
    }

    // Menghapus quote tertentu
    public function QuoteDestroy($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->delete();

        return redirect()->route('quote.index')->with('success', 'Quote successfully deleted!');
    }
}
