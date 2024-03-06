<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Blade;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('website_sekolah.pages.about');
    }
}