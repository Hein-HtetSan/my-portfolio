<?php

namespace App\Http\Controllers;

use App\Mail\Subscriber;
use Illuminate\Http\Request;
use Swift_TransportException;
use App\Models\Mail as UserMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

/**
 * Status code for Mail table
 *
 * -2 - trash
 * -1 - archives
 * 0  - inbox
 * 2 - sent
 * 1  - star
 */

class MailController extends Controller
{
    // index page
    public function index()
    {
        $mails = UserMail::whereIn('status', [0,1,2])->orderBy('created_at', 'desc')->paginate(5);
        return view('backend.mail', compact('mails'));
    }

    // get stared mail
    public function get_stared_mail()
    {
        $mails = UserMail::whereIn('status', [1])->orderBy('created_at', 'desc')->paginate(5);
        return view('backend.mail', compact('mails'));
    }

    // send mail list
    public function sendList()
    {
        $mails = UserMail::whereIn('status', [2])->orderBy('created_at', 'desc')->paginate(5);
        return view('backend.mail', compact('mails'));
    }

    // get archived mail list
    public function get_archived_mail()
    {
        $mails = UserMail::whereIn('status', [-1])->orderBy('created_at', 'desc')->paginate(5);
        return view('backend.mail', compact('mails'));
    }

    // get trashed mail list
    public function get_trashed_mail()
    {
        $mails = UserMail::whereIn('status', [-2])->orderBy('created_at', 'desc')->paginate(5);
        return view('backend.mail', compact('mails'));
    }

    // star the mail
    public function star($id)
    {
        $mail = UserMail::find($id);
        $mail->status = 1;
        $mail->save();
        return redirect()->back()->with(['success' => 'Success, stared mail.']);
    }

    // unstar the mail
    public function unstar($id)
    {
        $mail = UserMail::find($id);
        $mail->status = 0;
        $mail->save();
        return redirect()->back()->with(['success' => 'Success, unstared mail.']);
    }

    // archive the mail
    public function archive($id)
    {
        $mail = UserMail::find($id);
        $mail->status = -1;
        $mail->save();
        return redirect()->back()->with(['success' => 'Success, archived mail.']);
    }

    // unarchive the mail
    public function unarchive($id)
    {
        $mail = UserMail::find($id);
        $mail->status = 0;
        $mail->save();
        return redirect()->back()->with(['success' => 'Success, archived mail.']);
    }

    // put into trash
    public function trash($id)
    {
        $mail = UserMail::find($id);
        $mail->status = -2;
        $mail->save();
        return redirect()->back()->with(['success' => 'Success, mail was added to trash.']);
    }

    // out of trash
    public function untrash($id)
    {
        $mail = UserMail::find($id);
        $mail->status = 0;
        $mail->save();
        return redirect()->back()->with(['success' => 'Success, removed from trash']);
    }

    // destroy the mail
    public function destroy($id)
    {
        $mail = UserMail::find($id)->delete();
        return redirect()->route('mail.list')->with(['success' => 'Success, deleted permanently.']);
    }

    // get by id
    public function getById($id)
    {
        $mail = UserMail::where('id', $id)->first();
        return view('backend.mail', compact('mail'));
    }

    // reply mail
    // send mail
    public function reply(Request $request, $id)
    {
        // validate the message
        $this->checkMail($request);
        // get sender mail is $id
        // get the sender - mail
        $mail = UserMail::find($id)->sender_mail;
        $message = $request->message; // get sender message
        try {
            // Check if the email is valid
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                return redirect()->back()->with('error', 'Invalid email address. Please provide a valid email address.');
            }
            // Check network state
            if ($this->checkNetworkState()) {
                // Send the email to the admin email address using the sender's email address as the reply-to address
                Mail::to($mail)->send(new Subscriber('heinhtetsan33455@gmail.com', $message));
                // Save to mail database
                $mail = [
                    'sender_mail' => 'heinhtetsan33455@gmail.com',
                    'message' => $message,
                    'status' => 2,
                ];
                UserMail::create($mail);
                // Return view
                return redirect()->route('mail.list')->with(['success' => 'Success, you sent message to user.']);
            } else {
                // Return network error
                return redirect()->back()->with('error', 'Failed to send email. Please check your network connection and try again later.');
            }
        } catch (Swift_TransportException $e) {
            // Return email sending error
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }
    }

    // validate message
    private function checkMail(Request $request)
    {
        // define rule
        $rule = [
            'message' => 'required',
        ];
        Validator::make($request->all(), $rule)->validate();
    }

    // check the network state
    private function checkNetworkState() {
        $connected = @fsockopen("www.google.com", 80);
        // Attempt to open a socket connection to Google's server on port 80 (HTTP)
        if ($connected){
            fclose($connected); // Close the connection
            return true; // Connection successful
        }
        return false; // Connection failed
    }

}


