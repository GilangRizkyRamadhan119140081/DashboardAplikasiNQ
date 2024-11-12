<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SertifikatController extends Controller
{
    public function SertifikatIndex()
    {
        return view('admin.pages.sertifikat.index'); // Sesuaikan dengan view yang ada
    }
}
