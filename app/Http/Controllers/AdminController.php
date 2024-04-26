<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // dashboard page
    public function dashboard()
    {
        return view('backend.home');
    }

    // project page
    public function project()
    {
        return view('backend.work');
    }

    // mail page
    public function mail()
    {
        return view('backend.mail');
    }
}
