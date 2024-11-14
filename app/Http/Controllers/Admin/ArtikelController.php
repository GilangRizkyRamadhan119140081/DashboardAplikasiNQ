<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function ArtikelIndex()
    {
        return view('admin.pages.artikel.index'); // Sesuaikan dengan view yang ada
    }
    public function ArtikelCreate()
    {
        return view('admin.pages.artikel.create');
    }
}
