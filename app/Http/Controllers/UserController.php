<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Mail\Subscriber;
use Illuminate\Http\Request;
use Swift_TransportException;
use App\Models\Mail as UserMail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use ProtoneMedia\Splade\Facades\Splade;
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
        $projects = Splade::onLazy(fn() => Project::with(['covers', 'languages'])
                    ->orderBy('created_at', 'asc')
                    ->paginate(6));

        return view('parts.works', ['projects' => $projects]);
    }

    // contact page
    public function contact()
    {
        return view('parts.contact');
    }

    // project detail
    public function detail($id)
    {
        $project = Splade::onLazy(fn () => Project::with(['covers', 'languages'])->find($id));
        $currentUrl = urlencode(URL::current());
        return view('parts.project.detail', ['project' => $project, 'currentUrl' => $currentUrl]);
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
            // Check network state
            if ($this->checkNetworkState()) {
                // Send the email to the admin email address using the sender's email address as the reply-to address
                Mail::to('heinhtetsan33455@gmail.com')->send(new Subscriber($sender_mail, $message));
                // Save to mail database
                $mail = [
                    'sender_mail' => $sender_mail,
                    'message' => $message,
                    'status' => 0,
                ];
                UserMail::create($mail);
                // Return view
                return redirect()->route('user.contact')->with(['success' => 'Success, you sent message to developer.']);
            } else {
                // Return network error
                return redirect()->back()->with('error', 'Failed to send email. Please check your network connection and try again later.');
            }
        } catch (Swift_TransportException $e) {
            // Return email sending error
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }
    }

    private function checkNetworkState() {
        $connected = @fsockopen("www.google.com", 80);
        // Attempt to open a socket connection to Google's server on port 80 (HTTP)
        if ($connected){
            fclose($connected); // Close the connection
            return true; // Connection successful
        }
        return false; // Connection failed
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
