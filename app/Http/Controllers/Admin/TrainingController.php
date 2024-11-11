<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainingController extends Controller
{
    public function TrainingIndex()
    {
        return view('admin.pages.training.index'); // Sesuaikan dengan view yang ada
    }
}
