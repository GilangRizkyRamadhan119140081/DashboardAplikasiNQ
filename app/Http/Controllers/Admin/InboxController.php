<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;


class InboxController extends Controller
{
    public function InboxIndex()
    {
        return view('admin.pages.inbox.index'); // Sesuaikan dengan view yang ada
    }
}
