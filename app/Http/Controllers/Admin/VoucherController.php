<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function VoucherIndex()
    {
        $voucher = Voucher::paginate(16);
        return view('admin.pages.voucher.index',compact('voucher')); // Sesuaikan dengan view yang ada
    }
    public function VoucherCreate()
    {
        return view('admin.pages.voucher.create');
    }
}
