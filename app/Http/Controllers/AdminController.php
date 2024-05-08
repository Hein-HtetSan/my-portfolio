<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Mail as UserMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $mails = UserMail::whereIn('status', [0, 1, 2])->orderBy('created_at', 'desc')->paginate(5);
        return view('backend.mail', compact('mails'));
    }

    // intro edit page
    public function intro_page()
    {
        if(Auth::user()){
            $intro = Auth::user()->introduce;
            return view('backend.home.edit', compact('intro'));
        }else{
            return redirect()->route('login');
        }
    }

    // contact edit page
    public function contact_page()
    {
        if(Auth::user()){
            $contact = Auth::user();
            return view('backend.home.edit', compact('contact'));
        }else{
            return redirect()->route('login');
        }
    }

    // github edit page
    public function github_page()
    {
        if(Auth::user()){
            $github = Auth::user();
            return view('backend.home.edit', compact('github'));
        }else{
            return redirect()->route('login');
        }
    }

    // save intro message
    public function intro_save(Request $request)
    {
        Validator::make($request->all(), ['intro' => 'required|min:10'])->validate(); // validate
        $admin = User::where('id', Auth::user()->id)->first();
        $data = ['introduce' => $request->intro];
        $admin->update($data);
        return redirect()->route('dashboard')->with(['success'=> 'Intro message updated successfully']);
    }

    // save contact
    public function contact_save(Request $request)
    {
        Validator::make($request->all(), [
            'phone' => 'required|min:9',
            'address' => 'required|min:5',
        ])->validate();  // validate
        $admin = User::where('id', Auth::user()->id)->first();
        $data = [
            'phone' => $request->phone,
            'address' => $request->address
        ];
        $admin->update($data);
        return redirect()->route('dashboard')->with(['success'=> 'Contact updated successfully']);
    }

    // save github
    public function github_save(Request $request)
    {
        Validator::make($request->all(), [
            'git_uname' => 'required|min:5',
            'git_api' => 'required',
        ])->validate(); // validate
        $admin = User::where('id', Auth::user()->id)->first();
        $data = [
            'github' => 'https://github.com/' . $request->git_uname,
            'git_api' => $request->git_api,
        ];
        $admin->update($data);
        return redirect()->route('dashboard')->with(['success'=> 'Github updated successfully']);
    }
}
