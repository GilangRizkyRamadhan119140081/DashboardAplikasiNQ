<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;


class DashboardController extends Controller
{
    public function DashboardIndex()
    {
        return view('admin.layouts.index'); // Sesuaikan dengan view yang ada
    }
}
