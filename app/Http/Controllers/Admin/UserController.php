<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function UserIndex()
    {
        return view('admin.pages.user.index'); // Sesuaikan dengan view yang ada
    }
}
