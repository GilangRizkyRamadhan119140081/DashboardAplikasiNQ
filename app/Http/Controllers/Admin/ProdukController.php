<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailProduk;

class ProdukController extends Controller
{
    public function ProdukIndex()
    {
        $produk = DetailProduk::all();
        return view('admin.pages.produk.index',compact('produk')); // Sesuaikan dengan view yang ada
    }
}
