<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaketController extends Controller
{
    public function PaketIndex()
    {
        return view('admin.pages.paket.index'); // Sesuaikan dengan view yang ada
    }
}
