<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    // get all project
    public function get()
    {
        try{
            $data = Project::get();
            return response()->json(['success' => true, 'data' => $data], 200);
        }catch(\Exception $e){
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
