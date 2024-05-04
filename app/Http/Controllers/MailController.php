<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail as UserMail;

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

}


