<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function ArtikelIndex()
    {
        $artikel = Artikel::all();
        return view('admin.pages.artikel.index',compact('artikel')); // Sesuaikan dengan view yang ada
    }
}
