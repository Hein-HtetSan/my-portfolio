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
}
