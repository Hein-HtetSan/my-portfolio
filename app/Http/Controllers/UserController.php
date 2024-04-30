<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // me page
    public function me()
    {
        return view('parts.me');
    }

    // work page
    public function work()
    {
        $projects = Project::with(['covers', 'languages'])
                    ->orderBy('created_at', 'asc')
                    ->paginate(6);

        return view('parts.works', compact('projects'));
    }

    // contact page
    public function contact()
    {
        return view('parts.contact');
    }

    // project detail
    public function detail($id)
    {
        $project = Project::with(['covers', 'languages'])->find($id);
        return view('parts.project.detail', compact('project'));
    }

    // download cv
    public function download()
    {
        $filePath = storage_path('app/public/cv.pdf');
        return response()->download($filePath);
    }

    // check useer
    public function check(Request $request)
    {
        // dd($request->toArray());
        $route = $request->route;
        switch ($route) {
            case 'cd /admin':
            case 'cd admin':
                return redirect()->route('login');
                break;

            case 'cd /me':
            case 'cd me':
                return redirect()->route('user.me');
                break;

            case 'cd /workshops':
            case 'cd workshops':
                return redirect()->route('user.works');
                break;

            case 'cd /contact':
            case 'cd contact':
                return redirect()->route('user.contact');
                break;

            default:
                return back()->with('error', 'Your request is invalid. Please try again!');
                break;
        }
    }
}
