<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function QuoteIndex()
    {
        return view('admin.pages.quote.index'); // Sesuaikan dengan view yang ada
    }
}
