<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;


class SertifikatController extends Controller
{
    public function SertifikatIndex()
    {
        return view('admin.pages.sertifikat.index'); // Sesuaikan dengan view yang ada
    }
}
