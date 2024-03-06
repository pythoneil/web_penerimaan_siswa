<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class AdminController extends Controller
{
    public function admin()
    {
        $data = Daftar::all();
        $pendingCount = Daftar::where('status', 1)->count();
        $approvedCount = Daftar::where('status', 2)->count();
        $failedCount = Daftar::where('status', 3)->count();
        return view('admin.peges.dasboard', compact('data','pendingCount','approvedCount','failedCount'));
    }
}

