<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    public function VoucherIndex()
    {
        return view('admin.pages.voucher.index'); // Sesuaikan dengan view yang ada
    }
    public function VoucherCreate()
    {
        return view('admin.pages.voucher.create');
    }
}
