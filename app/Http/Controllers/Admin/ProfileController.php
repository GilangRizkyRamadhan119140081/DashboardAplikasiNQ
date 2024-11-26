<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function ProfileIndex()
    {
        return view('admin.pages.profile.index'); // Sesuaikan dengan view yang ada
    }
}
