<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Models\Users;


class DashboardController extends Controller
{
    public function DashboardIndex()
    {
        $memberCount = Users::count();

        return view('admin.pages.dashboard.index',compact('memberCount')); // Sesuaikan dengan view yang ada
    }
}
