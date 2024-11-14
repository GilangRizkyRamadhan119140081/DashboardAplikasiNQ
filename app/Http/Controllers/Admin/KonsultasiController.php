<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function KonsultasiIndex()
    {
        $konsultasi = Konsultasi::all();
        return view('admin.pages.konsultasi.index',compact('konsultasi')); // Sesuaikan dengan view yang ada
    }
}
