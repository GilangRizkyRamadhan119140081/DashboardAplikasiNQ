<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailProduk;

class ProdukController extends Controller
{
    public function ProdukIndex()
    {
        $produks = DetailProduk::all();
        return view('admin.pages.produk.index',compact('produks')); // Sesuaikan dengan view yang ada
    }
    public function ProdukCreate()
    {
        return view('admin.pages.produk.create');
    }
}
