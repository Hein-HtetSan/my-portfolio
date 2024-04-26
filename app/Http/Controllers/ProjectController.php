<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    // home page
    public function index()
    {
        return view('backend.work');
    }

    // create page
    public function create()
    {
        return view('backend.project.create');
    }
}
