<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function ProfileIndex()
    {

        $user = Auth::user();

        return view('admin.pages.profile.index', compact('user')); // Sesuaikan dengan view yang ada
    }
}
