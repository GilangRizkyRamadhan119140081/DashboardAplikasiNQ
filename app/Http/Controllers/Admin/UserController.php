<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UserController extends Controller
{
    public function UserIndex()
    {
        $users = Users::all();
        return view('admin.pages.user.index', compact('users')); // Sesuaikan dengan view yang ada
    }
}
