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
 * 1  - sent
 * 2  - star
 */

class MailController extends Controller
{
    // index page
    public function index()
    {
        $mails = UserMail::whereIn('status', [0,1,2])->orderBy('created_at', 'asc')->paginate(10);
        return view('backend.mail.inbox', compact('mails'));
    }

    // star the mail
    public function star($id)
    {
        $mail = UserMail::find($id);
        $mail->status = 1;
        $mail->save();
        return redirect()->back()->with(['success' => 'Success, stared mail.']);
    }
}
