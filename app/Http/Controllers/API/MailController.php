<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mail;

class MailController extends Controller
{
    // get the all mail
    public function get()
    {
        $data = Mail::get();
        return response()->json($data, 200);
    }
}
