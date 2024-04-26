<?php

namespace App\Http\Controllers;

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
        return view('parts.works');
    }

    // contact page
    public function contact()
    {
        return view('parts.contact');
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
                return back()->with('error', 'Your request not found. Please try again!');
                break;
        }
    }
}
