<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // index page
    public function index()
    {
        return view('backend.work');
    }
}
