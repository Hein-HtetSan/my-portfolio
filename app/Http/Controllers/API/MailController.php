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
        try{
            $data = Mail::get();
            return response()->json(['success' => true, 'data' => $data], 200);
        }catch(\Exception $e){
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
