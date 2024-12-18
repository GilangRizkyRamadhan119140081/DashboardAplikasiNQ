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
        $platinumCount = Users::where('kode_paket','like', 'Platinum%')->count();
        $goldCount = Users::where('kode_paket','like', 'Gold%')->count();
        $freeCount = Users::where('kode_paket','like', 'Free%')->count();

        // dd($memberCount);
        return view('admin.pages.dashboard.index',compact('memberCount', 'platinumCount', 'goldCount', 'freeCount')); // Sesuaikan dengan view yang ada
    }
    
}