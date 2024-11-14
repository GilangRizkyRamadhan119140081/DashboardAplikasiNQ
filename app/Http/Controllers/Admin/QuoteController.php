<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quotes;

class QuoteController extends Controller
{
    public function QuoteIndex()
    {
        $quotes = Quotes::paginate(20);
        return view('admin.pages.quote.index',compact('quotes')); // Sesuaikan dengan view yang ada
    }
    public function QuoteCreate()
    {
        return view('admin.pages.quote.create');
    }
}
