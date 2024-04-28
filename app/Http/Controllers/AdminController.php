<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        $projects = Project::with('covers', 'languages')->get();
        return view('backend.work', compact('projects'));
    }

    // mail page
    public function mail()
    {
        return view('backend.mail');
    }
}
