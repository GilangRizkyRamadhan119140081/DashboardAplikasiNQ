<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KonsultasiController extends Controller
{
    public function KonsultasiIndex()
    {
        return view('admin.pages.konsultasi.index'); // Sesuaikan dengan view yang ada
    }
}
