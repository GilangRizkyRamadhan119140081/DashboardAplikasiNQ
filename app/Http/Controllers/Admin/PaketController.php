<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailPaket;

class PaketController extends Controller
{
    public function PaketIndex()
{
    // Mengambil semua data dari tabel detail_paket
    $detail_paket = DetailPaket::all(); // Mengambil semua data tanpa pagination

    // Jika ingin menggunakan pagination
    // $detail_paket = DetailPaket::paginate(10);

    return view('admin.pages.paket.index', compact('detail_paket'));
}
public function PaketCreate()
    {
        return view('admin.pages.paket.create');
    }

}
