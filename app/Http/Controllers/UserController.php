<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Mail as UserMail;
use App\Mail\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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

    // send mail
    public function sendMail(Request $request)
    {
        // validate the message
        $this->checkMail($request);
        $sender_mail = $request->sender_mail;  // get sender mail
        $message = $request->message; // get sender message
        try {
            // Send the email to the admin email address using the sender's email address as the reply-to address
            Mail::to('heinhtetsan33455@gmail.com')->send(new Subscriber($sender_mail, $message));
            // save to mail database
            $mail = [
                'sender_mail' => $sender_mail,
                'message' => $message,
                'status' => 0,
            ];
            UserMail::create($mail);
            // return view
            return redirect()->route('user.contact')->with(['success' => 'Success, you sent message to developer.']);
        } catch (SendException $e) {
            // return network error
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }
    }

    private function checkMail(Request $request)
    {
        // define rule
        $rule = [
            'sender_mail' => 'required|email',
            'message' => 'required',
        ];
        Validator::make($request->all(), $rule)->validate();
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
