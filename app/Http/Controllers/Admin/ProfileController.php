<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function ProfileIndex()
    {

        $profile = Profile::all();

        return view('admin.pages.profile.index', compact('profile')); // Sesuaikan dengan view yang ada
    }
}
