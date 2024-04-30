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
        $projects = Project::with('covers', 'languages')
                    ->orderBy('created_at', 'desc') // Replace 'created_at' with your desired column to order by
                    ->paginate(6);
        return view('backend.work', compact('projects'));
    }

    // mail page
    public function mail()
    {
        return view('backend.mail');
    }
}
