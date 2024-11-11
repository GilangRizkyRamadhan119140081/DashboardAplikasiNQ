<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function ProdukIndex()
    {
        return view('admin.pages.produk.index'); // Sesuaikan dengan view yang ada
    }
}
