<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// model
use App\Models\Language;

class LangaugeController extends Controller
{
    // get all languages
    public function get()
    {
        try{
            $data = Language::get();
            return response()->json(['success' => true, 'data' => $data], 200);
        }catch(\Exception $e)
        {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
