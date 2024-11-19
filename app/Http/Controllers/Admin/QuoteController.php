<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quote;

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
            'quote'       => 'required|string|max:500',
            'from'        => 'nullable|string|max:255',
            'title'       => 'nullable|string|max:255',
            'image'       => 'nullable|string|max:255', // Menambahkan image sebagai optional
            'user_update' => 'required|integer|exists:users,id',
        ]);

        dd($validated);

        // Menyimpan data ke database
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
            'quote'       => 'required|string|max:500',
            'from'        => 'nullable|string|max:255',
            'title'       => 'nullable|string|max:255',
            'image'       => 'nullable|string|max:255',
            'user_update' => 'required|integer|exists:users,id',
        ]);

        // Update quote
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
